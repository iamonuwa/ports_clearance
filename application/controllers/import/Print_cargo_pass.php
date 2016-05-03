<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print_cargo_pass extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->title = "Cargo Pass";
		$this->load->view('frontend/import/print_cargo_pass');
	}

}

/* End of file Print_cargo_pass.php */
/* Location: ./application/controllers/import/Print_cargo_pass.php */