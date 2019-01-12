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

	public function updateCustomer()
	{
		$data = $this->input->post();
		$userId = $data['user_id'];
		unset($data['user_id']);

		if($this->global_model->update('profiles', 'user_id', $userId, $data)){
			$this->custom_library->flashDataMessage('info', 'UPDATE SUCCESS', 'Customer information successfully updated');
		} else {
			$this->custom_library->flashDataMessage('danger', 'UPDATE ERROR', 'Customer information update error');
		}
		redirect('admin/customers');
	}

	public function ajaxGetCustomers()
	{	
		$this->load->model('admin/customers_model');
		$res = $this->customers_model->getCustRecords();
		$data = array();
		foreach ($res as $key => $cust) {
			$data['data'][] = array($key+1, $cust->fname.' '.$cust->lname, $cust->address, $cust->gender_name, $cust->contact_num, $cust->birthdate, '<button type="button" class="btn btn-info btn-sm btn-cust-update" data-toggle="modal" data-target="#modal-edit" data-cust-id="'.$cust->user_id.'" ><i class="fa fa-fw fa-edit"></i></button> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-pets"><i class="fa fa-fw fa-paw"></i></button>');
		}
		echo json_encode($data);
	}

	public function ajaxGetCustomerInfo()
	{	
		$this->load->model('admin/customers_model');
		$res = $this->customers_model->getCustRecord($this->input->post('user_id'));
		$data = array();
		/*foreach ($res as $key => $cust) {
			$data['data'][] = array($key+1, $cust->fname.' '.$cust->lname, $cust->address, $cust->gender_name, $cust->contact_num, $cust->birthdate, '<button type="button" class="btn btn-info btn-sm btn-cust-update" data-toggle="modal" data-target="#modal-edit" data-cust-id="'.$cust->user_id.'" ><i class="fa fa-fw fa-edit"></i></button> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-pets"><i class="fa fa-fw fa-paw"></i></button>');
		}*/
		echo json_encode($res);
	}
		
}
