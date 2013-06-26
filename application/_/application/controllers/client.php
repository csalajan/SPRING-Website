<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
    
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
        if ($this->user->loggedIn == true) {
            if ($this->session->userdata('is_admin') == true) {
                redirect('admin');
            } else {
                redirect('client/profile');
            }
        }

        $this->load->helper('form');
        
        $this->load->view('clients/core/header', $this->user);
        $this->load->view('clients/login');
        
    }
    
    public function login() {
        $this->load->library('users');
        $this->load->library('form_validation');
        
        $username = $this->input->post('email');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('email', 'E-mail Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->helper('form');

            $this->load->view('clients/core/header', $this->user);
            $this->load->view('clients/login');
        } else {
            if ($this->users->login($username, $password) == true) {
                //Successful Login
                if ($this->session->userdata('chg_password') == 1) {
                    redirect('client/chg_password/' . $this->session->userdata('id'));                    
                } else {
                    if ($this->session->userdata('is_admin') == '1') {
                        redirect('admin');
                    } else {
                        redirect('client/profile');
                    }
                }
            } else {
                // Failed Login
                $this->load->helper('form');
                $this->data->error = "Invalid Username / Password combination.";
                $this->load->view('clients/core/header', $this->user);
                $this->load->view('clients/login', $this->data);
            }
        } 
    }

    public function logout() {
        $this->session->sess_destroy();

        redirect('home');

    }

    public function chg_password($id) {
        $this->load->helper('form');
        $this->data->id = $id;

        if ($this->input->post('submit') == 'change password') {
            $this->load->helper('string');
            $this->load->library('users');

            if ($this->users->login($this->session->userdata('username'), $this->input->post('old_password')) == true) {
                if ($this->input->post('new_password') == $this->input->post('chk_password')) {
                    $password = $this->input->post('new_password');
                    $salt = random_string('alnum', 6);
                    $hash = hash('sha256', $salt . $password);

                    $data = array(
                                  'client_password'     =>  $hash,
                                  'client_salt'         =>  $salt,
                                  'chg_password'        =>  0
                                  );

                    $this->db->where('id', $id);
                    $this->db->update('clients', $data);

                    redirect('client');
                } else {
                    // Function if new password's don't match
                    $this->data->message = 'New passwords do not match';

                    $this->load->view('clients/core/header', $this->user);
                    $this->load->view('clients/password', $this->data);
                }
            } else {
                // function if old password is incorrect
                $this->data->message = 'Old password is incorrect';

                $this->load->view('clients/core/header', $this->user);
                $this->load->view('clients/password', $this->data);
            }

        } else {
            $this->load->helper('form');


            $this->load->view('clients/core/header', $this->user);
            $this->load->view('clients/password', $this->data);
        }
    }

    public function profile() {

        if ($this->user->loggedIn == false) {
            redirect('client');
        }
        $this->load->library('users');
        
        $this->db->where('id', $this->users->get_userId($this->user->client));
        $raw = $this->db->get('clients');
        $result = $raw->result();
        $this->data->client = $result['0'];

        $this->load->view('clients/core/header', $this->user);
        $this->load->view('clients/profile', $this->data);
        $this->load->view('clients/core/footer');
    }

    public function projects($project) {
        if ($this->user->loggedIn == false) {
            redirect('client');
        }
        if ($project == 'branding') {
            $this->data->title = 'Branding';
            $this->data->refresh = 'branding';
        } else if ($project == 'design') {
            $this->data->title = 'Web Design';
            $this->data->refresh = 'design';
        } else if ($project == 'development') {
            $this->data->title = 'Web Development';
            $this->data->refresh = 'development';
        }
        $this->data->name = $this->user->name;


        $this->load->library('users');
        $id = $this->users->get_userId($this->user->client);

        $this->db->where('client_id', $id);
        $raw = $this->db->get($project);
        $result = $raw->result();
        $this->data->project = new stdClass;

        $this->data->project->ps = array();
        $this->data->project->wire = array();
        $this->data->project->style = array();
        $this->data->project->info = array();
        
        foreach ($result as $item) {
            if ($item->category == 'ps') {
                array_push($this->data->project->ps, $item);
            }
            if ($item->category == 'wire') {
                array_push($this->data->project->wire, $item);
            }
            if ($item->category == 'style') {
                array_push($this->data->project->style, $item);
            }
            if ($item->category == 'info') {
                array_push($this->data->project->info, $item);
            }
        }

        $this->load->view('clients/core/header', $this->user);
        $this->load->view('clients/project', $this->data);
        $this->load->view('clients/core/footer');

    }

    public function approve($refresh, $id) {
        $data = array('approved'    =>  '1');

        $this->db->where('id', $id);
        $this->db->update($refresh, $data);

        $this->load->library('email');

        $this->db->where('id', $id);
        $raw = $this->db->get($refresh);
        $result = $raw->result();

        $this->email->from($this->user->name, $this->user->company_name);
        $this->email->to('Thef3602@gmail.com');
        $this->email->subject($this->user->company_name . " has approved a design");
        $this->email->message($this->user->company_name . ' has approved a ' . $refresh . ' design.');

        $this->email->send();
        echo $this->email->print_debugger();

        redirect('client/projects/'.$refresh);

    }
    
}