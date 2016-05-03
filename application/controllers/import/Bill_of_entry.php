<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Bill_of_entry extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->input->post()){
			$data['container_id'] = $this->input->post('container_id');
			$data['ship_name'] = $this->input->post('ship_name');
			$data['ship_desc'] =$this->input->post('ship_desc');
			$data['quantity'] =$this->input->post('quantity');
			$data['weight'] =$this->input->post('weight');
			$data['user_id'] = $this->aauth->get_user()->id;
			if($this->bill_of_entry_model->insert($data)){
				$this->session->set_flashdata('success', 'Your Bill of entry submitted');
				redirect(base_url('import/bill_of_entry/index'),'refresh');
			}
			else{
				$this->session->set_flashdata('msg', 'An error occured. Please try again');
				redirect(base_url('import/bill_of_entry/index'),'refresh');
			}
		}
		$this->title = "Bill of Entry Application";
		$this->data['bill_of_entry'] = $this->bill_of_entry_model->get_all();
		$this->load->view('frontend/import/bill_of_entry', $this->data);
	}

}

/* End of file Bill_of_entry.php */
/* Location: ./application/controllers/import/Bill_of_entry.php */