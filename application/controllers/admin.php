<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		$this->load->helper('form');
		$this->load->view('admin/add_client');
	}

	public function add_client() {


	}
}