<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_debit_note extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->title = "View Debit Note";
		$this->load->view('frontend/export/view_debit_note');
	}

}

/* End of file View_debit_note.php */
/* Location: ./application/controllers/export/View_debit_note.php */