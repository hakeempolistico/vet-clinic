<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Admin');
	}

	public function index()
	{
		$custUserTypeId = $this->global_model->getRow('user_types', 'user_type_name', 'Customer')->user_type_id;
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Dashboard',
				'subContentTitle' => 'Control Panel',
				'breadCrumbIcon' => 'fa-dashboard',
				'breadCrumbBase' => 'Dashboard',
			),
			'page' => 'dashboard',
			'customerCount' => $this->global_model->count('users', array('user_type_id' => $custUserTypeId)),
		);
		$this->load->view('admin/template', $data);
	}
}
