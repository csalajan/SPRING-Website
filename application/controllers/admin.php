<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->data = new stdClass;
        $this->user = new stdClass;

		$this->user->loggedIn = $this->session->userdata('is_loggedIn');
        if ($this->user->loggedIn == true) {
            $this->user->client = $this->session->userdata('username');
            $this->user->name = $this->session->userdata('company_name');
        }
	}

	public function index() {
		if ($this->user->loggedIn == false) {
            redirect('client');
        }

        $where = array(
        			   'is_admin'	=>	0,
        			   'archived'	=>	0
        			   );
        $this->db->where($where);
        $data = $this->db->get('clients');
        $this->data->clients = $data->result();

        $where = array(
        			   'is_admin'	=>	0,
        			   'archived'	=>	1
        			   );
        $this->db->where($where);
        $raw = $this->db->get('clients');
        if ($raw->num_rows() != 0) {
        	$this->data->archived = $raw->result();
        } else {
        	$this->data->archived = array();
        }

		$this->load->helper('form');

		$this->load->view('admin/core/header', $this->user);
		$this->load->view('admin/main', $this->data);
		$this->load->view('admin/core/footer');
	}

	public function add_client() {
		$this->load->library('form_validation');
		$this->load->helper('string');
		
		$mailConfig['mailpath'] = "/usr/sbin/sendmail";
		// the mail protocol specifies sendmail
		$mailConfig['protocol'] = 'sendmail';
		$mailConfig['smtp_host'] = 'smtpout.secureserver.net';
		$mailConfig['smtp_user'] = 'info@spring215.com';
		$mailConfig['smtp_pass'] = 'spring215';
		$mailConfig['smtp_port'] = '465';
		$mailConfig['mailtype'] = 'html';
		$this->load->library('email', $mailConfig);

		// Create Random Password, Create Random Salt String, and hash password for database entry
		$client_password = random_string('alnum', 8);
		$client_salt = random_string('alnum', 6);
		$client_hash = hash('sha256', $client_salt . $client_password);

		// Build Database insert array
		$data = array(
					  'client_name'		=>	$this->input->post('clientname'),
					  'client_email'	=>	$this->input->post('clientemail'),
					  'client_password'	=>	$client_hash,
					  'client_salt'		=>	$client_salt,
					  'contact_name'	=>	$this->input->post('contactname'),
					  'contact_email'	=>	$this->input->post('contactemail'),
					  'contact_phone'	=>	$this->input->post('contactphone')
			);
		// Check if new client is SPRING Employee
		if ($this->input->post('is_admin') == true) {
			$data['is_admin'] = 1;
		}


		// Check project information
		if ($this->input->post('branding') == true) {
			$data['branding'] = 1;
		}
		if ($this->input->post('print') == true) {
			$data['print'] = 1;
		}
		if ($this->input->post('design') == true) {
			$data['design'] = 1;
		}
		if ($this->input->post('development') == true) {
			$data['development'] = 1;
		}

		// Insert information into database
		$this->db->insert('clients', $data);
		$email = new stdClass;
		$email->username = $data['client_email'];
		$email->password = $client_password;
		$message = $this->load->view('email/new_client', $email, TRUE);

		// Send Email to client with new password
		$this->email->from('info@spring215.com', 'SPRING Creative Group');
		$this->email->to($data['client_email']);
		$this->email->subject('Your account information at SPRING215.com');
		$this->email->message($message);
		$this->email->send();

		redirect('admin');




	}

	public function archive($archive, $id) {

		$data = array('archived'	=>	$archive);
		$this->db->where('id', $id);
		$this->db->update('clients', $data);

		redirect('admin');
	}
}