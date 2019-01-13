<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedules extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Admin');
	}

	public function index()
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Schedules',
				'subContentTitle' => 'Displayed schedules in calendar',
				'breadCrumbIcon' => 'fa-calendar-check-o',
				'breadCrumbBase' => 'Schedules',
			)
		);
		$this->load->view('admin/pages/schedules', $data);
	}
}
