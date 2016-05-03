<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->backend_title = 'Control Panel';
		if(!$this->aauth->is_loggedin()){
			redirect(base_url(),'refresh');
		}
		elseif($this->aauth->is_member('default')){
			redirect(base_url('accounts/index'),'refresh');
		}	
	}

	public function index()
	{
		
	}

}

/* End of file Backend_Controller.php */
/* Location: ./application/libraries/Backend_Controller.php */