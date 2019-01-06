<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Customer');
	}

	public function index()
	{
		$data = array(
			'profile' => $this->global_model->getRow('profiles', 'user_id', $this->session->user_id),
			'user' => $this->global_model->getRow('users', 'user_id', $this->session->user_id)
		);
		$this->load->view('site/dashboard', $data);
	}
}
