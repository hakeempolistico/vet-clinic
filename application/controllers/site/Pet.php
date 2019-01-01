<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pet extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkCustomerSession();
	}

	public function index()
	{
		//$profile = $this->global_model->getRow('profiles', 'user_id', )
		$this->load->view('site/pet');
	}
}
