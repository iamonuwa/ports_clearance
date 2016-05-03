<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imports extends Backend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->title = "Bill Of Entry Manager";
		$this->data['bill_of_entry'] = $this->bill_of_entry_model->get_all();
		$this->load->view('backend/imports/bill_of_entry', $this->data);	
	}

	public function delivery_order()
	{
		if(($this->input->post())){
			$data['company_id'] = $this->input->post('shipping_company_id');
			$data['ship_name'] = $this->input->post('ship_name');
			$data['arrival_date'] = $this->input->post('arrival_date');
			$data['container_id'] = $this->input->post('container_id');
			$data['exporter'] = $this->input->post('exporter');
			$data['delivery_terminal'] = $this->input->post('deliver_to');
			$data['date_created'] = time();

			if($this->delivery_order_model->insert($data)){
				$this->session->set_flashdata('sucess', 'Delivery Order has been saved');
				redirect(base_url('admin/imports/delivery_order'),'refresh');
			}
			else{
				$this->session->set_flashdata('msg', 'An error occured. Please try again later');
				redirect(base_url('admin/imports/delivery_order'),'refresh');
			}

		}else{
		$this->data['container'] = $this->bill_of_entry_model->get_many_by('status', 'Cleared');
		$this->data['delivery_order'] = $this->delivery_order_model->get_all();
		$this->title = "Delivery Order Manager";
		$this->load->view('backend/imports/delivery_order', $this->data);
		}
	}

	public function cargo_pass()
	{
		if($this->input->post()){
			$data['container_id'] = $this->input->post('container_id');
			$data['amount'] = $this->input->post('amount_paid');
			$data['status'] = $this->input->post('status');
			$data['date_created'] = time();
			if($this->cargo_pass_model->insert($data)){
				$this->session->set_flashdata('success', 'Cargo Pass has been created.');
				redirect(base_url('admin/imports/cargo_pass'),'refresh');
			}
			else{
				$this->session->set_flashdata('msg', 'An error occured. Please try again later');
				redirect(base_url('admin/imports/cargo_pass'),'refresh');
			}
		}
		else{
		$this->title = "Cargo Pass";
		$this->data['cargo'] = $this->bill_of_entry_model->get_many_by('status','Cleared');
		$this->data['cargo_data'] = $this->cargo_pass_model->get_all();
		$this->load->view('backend/imports/cargo_pass',$this->data);
		}
	}

	public function preview($param)
	{
			if($this->input->post()){
				// $data['user_id'] = $this->aauth->get_user($this->input->post('applicant_name'))->;
				$data['ship_name'] = $this->input->post('ship_name');
				$data['ship_desc'] = $this->input->post('ship_desc');
				$data['quantity'] = $this->input->post('quantity');
				$data['weight'] = $this->input->post('weight');
				$data['status'] = $this->input->post('status');
				if($this->bill_of_entry_model->update($param, $data, $skip_validation = FALSE)){
				$this->session->set_flashdata('success', 'Application has been updated');
				redirect(base_url('admin/imports/index'),'refresh');
				}
				else{
				$this->session->set_flashdata('msg', 'An error occured. Please try again later');
				redirect(base_url('admin/imports/index'),'refresh');
				}
			}else{
		$this->title = "Preview Bill of Entry Application";
		$this->data['preview'] = $this->bill_of_entry_model->get($param);
		$this->load->view('backend/imports/preview_bill', $this->data);
			}
		}

	

}

/* End of file Imports.php */
/* Location: ./application/controllers/admin/Imports.php */