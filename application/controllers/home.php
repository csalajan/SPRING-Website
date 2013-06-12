<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function  __construct() {
		parent::__construct();
		$this->banner = new stdClass;
		$this->banner->link = false;
		$this->banner->css = "sixteen columns";	
		
		$this->header = new stdClass;
		$this->header->title = "Spring Creative Group - Branding for Start-ups and Small Business in south-east Michigan";
		
	}
	public function index() {	
		$this->banner->text = "We help brand the next generation of Michigan's start-up businesses.";
		$this->banner->link = true;
			
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		$this->load->view('main');
		$this->load->view('core/footer');
	}
	
	public function services() {
		$this->header->title = "SPRING Creative Group Services";
		
		$this->banner->css = "sixteen columns offset-by-four alpha subpage-title-bar";
		$this->banner->text = "SPRING's Services";
		
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		$this->load->view('services');
		$this->load->view('core/footer');
	}
	
	public function about() {
		$this->header->title = "About SPRING Creative Group";
		
		$this->banner->css = "sixteen columns offset-by-four alpha subpage-title-bar";
		$this->banner->text = "About SPRING";
		
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		
		$this->load->view('core/footer');
	}
	
	public function contact() {
		$this->header->title = "Contact SPRING Creative Group";
		
		$this->banner->css = "sixteen columns offset-by-four alpha subpage-title-bar";
		$this->banner->text = "Contact SPRING";
		
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		
		$this->load->view('core/footer');
	}
	
	public function team() {
		$this->header->title = "SPRING Creative Group Team";
		
		$this->banner->css = "sixteen columns offset-by-four alpha subpage-title-bar";
		$this->banner->text = "SPRING's Team";
		
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		
		$this->load->view('core/footer');
	}
	
	public function blog() {
		$this->header->title = "SPRING Creative Group Blog";
		
		$this->banner->css = "sixteen columns offset-by-four alpha subpage-title-bar";
		$this->banner->text = "SPRING's Blog";
		
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		
		$this->load->view('core/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */