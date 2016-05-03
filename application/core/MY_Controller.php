<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('users_model','container_model','delivery_order_model','cargo_pass_model','tally_model','bill_of_entry_model'));
		
	}


}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */