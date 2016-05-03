<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends Backend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->title = 'Admin Dashboard';
		$this->data['user'] = $this->aauth->get_user();
		$this->load->view('backend/settings', $this->data);
	}

	public function logout()
	{
		$this->aauth->logout();
		redirect(base_url(),'refresh');
	}

	public function settings()
	{
		$this->data['user'] = $this->aauth->get_user($this->session->userdata('id'));
		$this->title = "Update Profile";
		$this->load->view('backend/settings', $this->data);
	}

	
}

/* End of file Accounts.php */
/* Location: ./application/controllers/admin/Accounts.php */