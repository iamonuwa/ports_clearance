<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Output extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$container_name = $this->uri->segment(3);
			// load library 
		$this->load->library('pdf'); 
		 $pdf = $this->pdf->load(); 
		 $this->data['tally'] = $this->tally_model->get_by('container_id', $container_name);
		 $this->data['container'] = $this->container_model->get_by('container_name', $container_name);
		 // var_dump($this->data['container_id']);
		 $this->data['user'] = $this->aauth->get_user($this->data['container_id']['owner']);
		 $this->title = "items"; 
		 ini_set('memory_limit', '256M'); 
		 // boost the memory limit if it's low ;) 
		 $html = $this->load->view('printouts/tally', $this->data, true); 
		 // render the view into HTML 
		 $pdf->WriteHTML($html); 
		 // write the HTML into the PDF $
		 $output = 'export_tally_' . date('Y_m_d_H_i_s') . '_.pdf'; 
		 $pdf->Output("$output", 'I'); // save to file because we can exit(); 
	}

		public function debit()
	{
		$container_name = $this->uri->segment(3);
			// load library 
		$this->load->library('pdf'); 
		 $pdf = $this->pdf->load(); 
		 $this->data['container'] = $this->container_model->get_by('container_name', $container_name);
		 // var_dump($this->data['container_id']);
		 $this->data['user'] = $this->aauth->get_user($this->data['container_id']['owner']);
		 $this->title = "items"; 
		 ini_set('memory_limit', '256M'); 
		 // boost the memory limit if it's low ;) 
		 $html = $this->load->view('printouts/debit', $this->data, true); 
		 // render the view into HTML 
		 $pdf->WriteHTML($html); 
		 // write the HTML into the PDF $
		 $output = 'export_tally_' . date('Y_m_d_H_i_s') . '_.pdf'; 
		 $pdf->Output("$output", 'I'); // save to file because we can exit(); 
	}
			public function delivery()
	{
		$container_name = $this->uri->segment(3);
			// load library 
		$this->load->library('pdf'); 
		 $pdf = $this->pdf->load(); 
		 $this->data['container'] = $this->container_model->get_by('container_name', $container_name);
		 // var_dump($this->data['container_id']);
		 $this->data['user'] = $this->aauth->get_user($this->data['container_id']['owner']);
		 $this->title = "items"; 
		 ini_set('memory_limit', '256M'); 
		 // boost the memory limit if it's low ;) 
		 $html = $this->load->view('printouts/delivery', $this->data, true); 
		 // render the view into HTML 
		 $pdf->WriteHTML($html); 
		 // write the HTML into the PDF $
		 $output = 'export_tally_' . date('Y_m_d_H_i_s') . '_.pdf'; 
		 $pdf->Output("$output", 'I'); // save to file because we can exit(); 
	}

			public function cargo()
	{
		$container_name = $this->uri->segment(3);
			// load library 
		$this->load->library('pdf'); 
		 $pdf = $this->pdf->load(); 
		 $this->data['container'] = $this->container_model->get_by('container_name', $container_name);
		 // var_dump($this->data['container_id']);
		 $this->data['user'] = $this->aauth->get_user($this->data['container_id']['owner']);
		 $this->title = "items"; 
		 ini_set('memory_limit', '256M'); 
		 // boost the memory limit if it's low ;) 
		 $html = $this->load->view('printouts/cargo', $this->data, true); 
		 // render the view into HTML 
		 $pdf->WriteHTML($html); 
		 // write the HTML into the PDF $
		 $output = 'export_tally_' . date('Y_m_d_H_i_s') . '_.pdf'; 
		 $pdf->Output("$output", 'I'); // save to file because we can exit(); 
	}
}

/* End of file Output.php */
/* Location: ./application/controllers/Output.php */