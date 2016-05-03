<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print_export_tally extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->title = "Print Export Tally";
		$this->load->view('frontend/export/print_export_tally');
	}

}

/* End of file Print_export_tally.php */
/* Location: ./application/controllers/export/Print_export_tally.php */