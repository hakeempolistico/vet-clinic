<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Admin');
	    $this->load->model('admin/schedules_model');
	    $this->load->model('admin/pets_model');
	}

	public function index()
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Reports',
				'subContentTitle' => 'Manage reports of schedules',
				'breadCrumbIcon' => 'fa fa-file-text-o',
				'breadCrumbBase' => 'Reports',
			),
			'page' => 'reports',
		);
		$this->load->view('admin/template', $data);
	}

}
