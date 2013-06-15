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
            redirect('client/profile');
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
                redirect('client/profile');
                
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
        } else if ($project == 'design') {
            $this->data->title = 'Web Design';
        } else if ($project == 'development') {
            $this->data->title = 'Web Development';
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
    
}