<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exports extends Backend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->title = "Shipping Note Manager";
		$this->load->view('backend/exports/apply_for_export');
	}

	public function export_tally()
	{
		if($this->input->post()){
			$data['container_id'] = $this->input->post('container_id');
			$data['status'] = $this->input->post('status');
			$data['date_created'] = time();
			$insert = $this->tally_model->insert($data);

			if ($insert) {
				$this->session->set_flashdata('success', 'Tally has been Created.');
				redirect(base_url('admin/exports/export_tally'),'refresh');				
			}
		}
		$this->title = "Export Tally Manager";
		$this->data['container'] = $this->container_model->get_all();
		$this->data['tally'] = $this->tally_model->get_all();
		$this->load->view('backend/exports/print_export_tally', $this->data);
	}

	public function debit_note()
	{
		$this->title = "Debit Note";
		$this->data['container'] = $this->container_model->get_all();
		$this->load->view('backend/exports/view_debit_note', $this->data);
	}

}

/* End of file Exports.php */
/* Location: ./application/controllers/admin/Exports.php */