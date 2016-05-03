<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->aauth->is_loggedin()){
			redirect(base_url(),'refresh');
		}
	}

	public function index()
	{
		$this->title = 'My Dashboard';
		$this->load->view('frontend/user/index');
	}

	public function logout()
	{
		$this->aauth->logout();
		redirect(base_url(),'refresh');
	}

	public function payments()
	{
		$this->title = "Make Payments";
		$this->load->view('frontend/user/payments');
	}

	public function settings()
	{
		$this->title = "Update Profile";
		$this->load->view('frontend/user/setting');
	}

	public function update()
	{
		if($this->input->post()){
			$this->first_name = $this->input->post('first_name');
			$this->last_name = $this->input->post('last_name');
			$this->other_name = $this->input->post('other_name');
			$this->company = $this->input->post('company');
			$this->username = $this->input->post('username');
			$this->phone = $this->input->post('phone');
			$this->address = $this->input->post('address');

			if($this->aauth->update_user($this->session->userdata('id'), FALSE, FALSE, $this->username, $this->first_name, $this->last_name, $this->other_name, $this->company, $this->phone, $this->address)){
				$this->session->set_flashdata('success', 'Your Profile has been updated successfully');
				 redirect(base_url('accounts/settings'),'refresh');
			}
			else{
				$this->session->set_flashdata('msg', $this->aauth->print_errors());
				redirect(base_url('accounts/settings'),'refresh');
			}
		}
	}

	public function password()
	{
		if($this->input->post()){
			$this->old_password = $this->input->post('old_password');
			$this->new_password = $this->input->post('new_password');
			$this->c_new_password = $this->input->post('c_new_password');

			if(empty($this->old_password) || empty($this->new_password) || empty($this->c_new_password)){
				$this->session->set_flashdata('msg', 'Password Fields Cannot be Blank');
				redirect(base_url('accounts/settings'),'refresh');
			}
			elseif ($this->new_password != $this->c_new_password) {
				$this->session->set_flashdata('msg', 'Confirm Password must match with New Password');
				redirect(base_url('accounts/settings'),'refresh');
			}
			else{
				if($this->aauth->update_user($this->session->userdata('id'), $email = FALSE, $this->new_password = TRUE, $name = FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE)){
				 $this->session->set_flashdata('success', 'Your Password has been changed successfully');
				 redirect(base_url('accounts/settings'),'refresh');
				}
				else{
				 $this->session->set_flashdata('msg', $this->aauth->print_errors());
				 redirect(base_url('accounts/settings'),'refresh');
				}
			}
		}
		else{
				 $this->session->set_flashdata('msg', "No information was supplied");
				 redirect(base_url('accounts/settings'),'refresh');
		}
	}
}

/* End of file Accounts.php */
/* Location: ./application/controllers/Accounts.php */