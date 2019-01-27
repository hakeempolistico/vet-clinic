<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approvals extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Admin');
	}

	public function index()
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Approvals',
				'subContentTitle' => 'View/manage customer pending schedules',
				'breadCrumbIcon' => 'fa-check-circle-o',
				'breadCrumbBase' => 'Approvals',
			),
			'page' => 'approvals'
		);
		$this->load->view('admin/template', $data);
	}
}
