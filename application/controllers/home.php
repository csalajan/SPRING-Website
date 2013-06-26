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
		$this->banner->div_css = "row red title-section";
		$this->banner->h1 = "";
		
		$this->header = new stdClass;
		$this->header->title = "Spring Creative Group - Branding for Start-ups and Small Business in south-east Michigan";
		
	}
	public function index() {
		$this->header->description = "A full-scale design house located within the SPARK East Business Incubator. Your start-up’s solution for branding, print and web design and development.";
		$this->banner->text = "Branding, print and web design for the next generation of Michigan's start-up businesses.";
		$this->banner->link = true;

		$this->banner->h1 = "bottom-space";
			
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		$this->load->view('main');
		$this->load->view('core/footer');
	}
	
	public function services() {
		$this->header->title = "SPRING Creative Group Services";
		$this->header->description = "Branding, Print and Web design services for Michigan’s Start-up community located within the SPARK East Business Incubator.";
		
		$this->banner->css = "sixteen columns offset-by-four alpha subpage-title-bar";
		$this->banner->div_css = "row red";
		$this->banner->text = "SPRING's Services";
		
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		$this->load->view('services');
		$this->load->view('core/footer');
	}
	
	public function about() {
		$this->header->title = "About SPRING Creative Group";
		$this->header->description = "The source for branding, print and web design for Michigan’s Start-up community located within the SPARK East Business Incubator.";
		
		$this->banner->css = "sixteen columns offset-by-four alpha subpage-title-bar";
		$this->banner->div_css = "row red";
		$this->banner->text = "About SPRING";
		
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		$this->load->view('about');
		$this->load->view('core/footer');
	}
	
	public function contact() {
		$this->load->helper('form');
		$this->header->title = "Contact SPRING Creative Group";
		$this->header->description = "Phone: 734.372.4048, Email: info@spring215.com, Snail Mail: 215 W. Michigan Ave, Ypsilanti MI, 48197";
		
		$this->banner->css = "sixteen columns offset-by-four alpha subpage-title-bar";
		$this->banner->div_css = "row red";
		$this->banner->text = "Contact SPRING";
		
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		$this->load->view('contact');
		$this->load->view('core/footer');
	}

	public function contact_submit() {
		$this->load->library('form_validation');

		$this->load->library('email');
		$config['mailtype'] = 'html';
		$this->email->initialize($config);

		$this->form_validation->set_rules('customeremail', 'Email Address', 'required|valid_email');
		
		if ($this->form_validation->run() == false) {

		} else {
			$data = array(
						  'customer_name'	=>	$this->input->post('customername'),
						  'company_name'	=>	$this->input->post('companyname'),
						  'customer_email'	=>	$this->input->post('customeremail'),
						  'customer_phone'	=>	$this->input->post('customerphone'),
						  'customer_goals'	=>	$this->input->post('customer-goals')
						  );
			$this->db->insert('contact', $data);

			$message = $data['customer_name'] . ' has submitted the following information:<br> Customer Name: ' . $data['customer_name'] . '<br>Company Name: ' . $data['company_name'] . '<br>Customer Email: ' . $data['customer_email'] . '<br>Customer Phone: ' . $data['customer_phone'] . '<br>Customer Goals: ' . $data['customer_goals'];
			$this->email->from($data['customer_name']);
			$this->email->to('info@spring215.com');
			$this->email->subject($data['customer_name'] . ' has contacted us.');
			$this->email->message($message);

			$this->email->send();

			$this->load->helper('form');
			
			$this->contact = new stdClass;
			$this->header->title = "Contact SPRING Creative Group";
			$this->header->description = "Phone: 734.372.4048, Email: info@spring215.com, Snail Mail: 215 W. Michigan Ave, Ypsilanti MI, 48197";
			$this->banner->css = "sixteen columns offset-by-four alpha subpage-title-bar";
			$this->banner->div_css = "row red";
			$this->banner->text = "Contact SPRING";
			$this->contact->message = "Your form has been submitted. We will contact you as soon as possible";
		
			$this->load->view('core/header', $this->header);
			$this->load->view('core/banner', $this->banner);
			$this->load->view('contact', $this->contact);
			$this->load->view('core/footer');


		}


	}
	
	public function team() {
		$this->header->title = "SPRING Creative Group Team";
		$this->header->description = "Learn about the SPRING Creative Group’s team members.";
		
		$this->banner->css = "sixteen columns offset-by-four alpha subpage-title-bar";
		$this->banner->div_css = "row red";
		$this->banner->text = "SPRING's Team";
		
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		$this->load->view('team');
		$this->load->view('core/footer');
	}
	
	public function blog() {
		$this->header->title = "SPRING Creative Group Blog";
		$this->header->description = "";
		
		$this->banner->css = "sixteen columns offset-by-four alpha subpage-title-bar";
		$this->banner->div_css = "row red";
		$this->banner->text = "SPRING's Blog";
		
		$this->load->view('core/header', $this->header);
		$this->load->view('core/banner', $this->banner);
		$this->load->view('blog');
		$this->load->view('core/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */