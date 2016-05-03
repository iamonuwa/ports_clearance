<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->frontend = 'Nigerian Ports Authority';
		$this->load->model(array('bill_of_entry_model'));
	}

	public function index()
	{
		
	}

}

/* End of file Frontend_Controller.php */
/* Location: ./application/libraries/Frontend_Controller.php */