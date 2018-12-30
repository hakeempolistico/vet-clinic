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

	public function ajaxGetCustomers()
	{	
		$this->load->model('admin/customers_model');
		$res = $this->customers_model->getRecords();
		$data = array();
		$action = '<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit" ><i class="fa fa-fw fa-edit"></i></button> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-pets"><i class="fa fa-fw fa-paw"></i></button>';
		foreach ($res as $key => $cust) {
			$data['data'][] = array($key+1, $cust->fname.' '.$cust->lname, $cust->address, $cust->gender_name, $cust->contact_num, $cust->birthdate, $action);
		}
		echo json_encode($data);
	}
		
}
