<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function index()
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Customers',
				'subContentTitle' => 'View/manage customer information',
				'breadCrumbIcon' => 'fa-users',
				'breadCrumbBase' => 'Customers',
			)
		);
		$this->load->view('admin/pages/customers', $data);
	}
}
