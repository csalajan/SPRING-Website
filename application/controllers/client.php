<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->user = new stdClass;
        $this->user->loggedIn = $this->session->userdata('is_loggedIn');
        if ($this->user->loggedIn == true) {
            $this->user->client = $this->session->userdata('username');
        }
    }
    
    public function index() {
        $this->load->helper('form');
        
        $this->load->view('clients/login');
        
    }
    
    public function login() {
        $this->load->library('users');
        
        $username = $this->input->post('email');
        $password = $this->input->post('password');
        
        if ($this->users->login($username, $password) == true) {
            //Successful Login
            echo 'Success';
            
        } else {
            // Failed Login
            echo 'failed';
        }
        
    }
    
}