<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnose extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Admin');
	}

	public function index()
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Diagnose',
				'subContentTitle' => 'Manage diagnose of schedules',
				'breadCrumbIcon' => 'fa-medkit',
				'breadCrumbBase' => 'Diagnose',
			),
			'page' => 'diagnose',
		);
		$this->load->view('admin/template', $data);
	}
}
