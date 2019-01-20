<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedules extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Admin');
	}

	public function list()
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Schedules',
				'subContentTitle' => 'Displayed schedules in list view',
				'breadCrumbIcon' => 'fa-calendar-check-o',
				'breadCrumbBase' => 'Schedules',
				'listView' => 'list',
			),
			'page' => 'schedules_list',
		);
		$this->load->view('admin/template', $data);
	}
}
