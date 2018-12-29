<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Dashboard',
				'subContentTitle' => 'Control Panel',
				'breadCrumbIcon' => 'fa-dashboard',
				'breadCrumbBase' => 'Dashboard',
			)
		);
		$this->load->view('admin/pages/dashboard', $data);
	}
}
