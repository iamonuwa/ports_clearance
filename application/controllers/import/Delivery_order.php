<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery_order extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->title = "Delivery Order Form";
		$this->load->view('frontend/import/delivery_order');
	}

}

/* End of file Delivery_order.php */
/* Location: ./application/controllers/import/Delivery_order.php */