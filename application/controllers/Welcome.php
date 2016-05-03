<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->title = 'Homepage';
		$this->load->view('frontend/login');

		 // load library 
		// $this->load->library('pdf'); 
		//  $pdf = $this->pdf->load(); 
		//  // retrieve data from model 
		//  $data['all_itemreport'] = $this->itemreport->get_items(); 
		//  $data['title'] = "items"; ini_set('memory_limit', '256M'); 
		//  // boost the memory limit if it's low ;) 
		//  $html = $this->load->view('welcome_message', $data, true); 
		//  // render the view into HTML 
		//  $pdf->WriteHTML($html); 
		//  // write the HTML into the PDF $
		//  output = 'itemreport' . date('Y_m_d_H_i_s') . '_.pdf'; 
		//  $pdf->Output("$output", 'I'); // save to file because we can exit(); 
	}

	public function test()
	{

	}
}
