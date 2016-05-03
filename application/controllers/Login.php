<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public $error;

	public function index()
	{
		if($this->input->post()){
			$this->identity = $this->input->post('identity');
			$this->password = $this->input->post('password');

			if (empty($this->identity) || empty($this->password)) {
			 	$this->error = 'Please enter your login details';
			 	$this->session->set_flashdata('msg', $this->error);
				redirect(base_url('login'),'refresh');
			 }

			 else{
			 	if($this->aauth->login($this->identity, $this->password, $remember = FALSE, $totp_code = NULL)){
			 		if($this->aauth->is_member('default')){
						redirect(base_url('accounts/index'),'refresh');
					}
					else{
						redirect(base_url('admin/accounts/index'),'refresh');
					}
			 	}
			 	else{
			 		$this->session->set_flashdata('msg', $this->aauth->print_errors());
					redirect(base_url('login'), 'refresh');
			 	}
			 }
		}
		else{
		$this->title = "Client Login";
		$this->load->view('frontend/login');
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */