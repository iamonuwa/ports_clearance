<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Backend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->input->post()){

			$this->first_name = $this->input->post('first_name');
			$this->last_name = $this->input->post('last_name');
			$this->other_name = $this->input->post('other_name');
			$this->email_address = $this->input->post('email_address');
			$this->loginID = $this->input->post('loginID');
			$this->access_level = $this->input->post('access_level');
			$this->password = 'password';

			if($this->aauth->create_user($this->email_address, $this->password, $this->loginID, $this->first_name, $this->last_name, $this->other_name, $this->access_level)){
				$this->session->set_flashdata('success', 'Account has been created');
				redirect(base_url('admin/users/index'),'refresh');
			}
			else{
				$this->session->set_flashdata('msg', $this->aauth->print_errors());
				redirect(base_url('admin/users/index'),'refresh');
			}
		}
		else{
		$this->data['users'] = $this->aauth->list_users();
		$this->title = 'Users Management';
		$this->load->view('backend/users/index', $this->data);
		}
	}


	public function banned($param = null)
	{
		if(isset($param)){
			if ($this->session->userdata('id')== $param) {
				$this->session->set_flashdata('msg', 'You cannot block yourself');
				redirect(base_url('admin/users/index'),'refresh');
			}else{
			if($this->aauth->ban_user($param)){
				$this->session->set_flashdata('success', 'Account Has been Blocked');
				redirect(base_url('admin/users/index'),'refresh');
			}
			
			else{
				$this->session->set_flashdata('msg', $this->aauth->print_errors());
				redirect(base_url('admin/users/index','refresh'));
				}
			}
		}
		else{
		$this->data['banned'] = $this->users_model->get_many_by('banned', 1);
		$this->title = 'Banned Accounts';
		$this->load->view('backend/users/banned', $this->data);
		}
	}

	public function unban($param = null)
	{
		if(isset($param)){
			if($this->aauth->unban_user($param)){
				$this->session->set_flashdata('success', 'Account has been unblocked');
				redirect(base_url('admin/users/banned'),'refresh');
			}
			else{
				$this->session->set_flashdata('msg', $this->aauth->print_errors());
				redirect(base_url('admin/users/banned'),'refresh');
			}
		}
	}

	public function preview($param = null)
	{
		if(isset($param)){
		$this->title = "Preview ". $this->aauth->get_user($param)->name;
		$this->data['user'] = $this->aauth->get_user($param);
		$this->load->view('backend/users/preview', $this->data);
		}
		else{
			$this->session->set_flashdata('msg', 'No Information was supplied');
			redirect(base_url('admin/users/index'),'refresh');
		}
	}
}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */