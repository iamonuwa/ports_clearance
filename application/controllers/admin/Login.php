<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Backend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->title = 'Admin Login';
		$this->load->view('backend/login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */