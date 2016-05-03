<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_for_export extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->input->post()) {
			$data['container_size'] = $this->input->post('container_size');
			$data['container_name'] = $this->input->post('container_name');
			$data['ship_name'] = $this->input->post('ship_name');
			$data['location'] = $this->input->post('container_destination');
			$data['owner'] = $this->session->userdata('id');
			$data['services'] = $this->input->post('services');
			$data['last_update'] = date();

			if($this->container_model->insert($data)){
				$this->session->set_flashdata('success', 'Export Application has been Submitted');
				redirect(base_url('export/apply_for_export/index'),'refresh');
			}
			else{
				$this->session->set_flashdata('msg', 'An error occured. Please try again later');
				redirect(base_url('export/apply_for_export/index'),'refresh');
			}
		}
		else{
		$this->title = "Export Application";
		$this->data['container'] = $this->container_model->get_many_by('owner', $this->session->userdata('id'));
		$this->load->view('frontend/export/apply_for_export', $this->data);
		}
	}

}

/* End of file Apply_for_export.php */
/* Location: ./application/controllers/export/Apply_for_export.php */