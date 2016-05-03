<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Frontend_Controller {

	public function index()
	{
		$this->title = "About Us";
		$this->load->view('pages/about');
	}

	public function contact()
	{
		$this->title = "Contact Us";
		$this->load->view('pages/contact');
	}

	public function about()
	{
		$this->title = "About Us";
		$this->load->view('pages/about');
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */