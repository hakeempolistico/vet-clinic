<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Admin');
		$this->load->model('admin/customers_model');
	}

	public function index()
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Customers',
				'subContentTitle' => 'View/manage customer information',
				'breadCrumbIcon' => 'fa-users',
				'breadCrumbBase' => 'Customers',
			),
			'page' => 'customers'
		);
		$this->load->view('admin/template', $data);
	}

	public function profile($user_id)
	{
		//Get customers information
		$cust_info = $this->customers_model->getCustRecord($user_id);
		if (empty($cust_info)) {
			$this->custom_session->flashDataMessage('danger', 'ERROR', 'Customer information not found');
			redirect('admin/customers');
		}

		//Get list of pets
		$pets = $this->customers_model->getPetsInfo($user_id);

		//Data passed to view
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Customers',
				'subContentTitle' => 'View customer profile',
				'breadCrumbIcon' => 'fa-users',
				'breadCrumbBase' => 'Customers',
			),
			'cust_info' => $cust_info,
			'pets' => $pets,
			'page' => 'customer_profile'
		);
		$this->load->view('admin/template', $data);
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
		redirect('admin/customers/profile/'.$userId);
	}

	public function ajaxGetCustomers()
	{	
		$res = $this->customers_model->getCustRecords();
		$data = array();
		foreach ($res as $key => $cust) {
			$data['data'][] = array($key+1, $cust->fname.' '.$cust->lname, $cust->address, $cust->gender_name, $cust->contact_num, $cust->birthdate, '<a type="button" class="btn btn-info btn-sm btn-cust-update" href="'.site_url('admin/customers/profile/').$cust->user_id.'" ><i class="fa fa-fw fa-edit"></i></a>');
		}
		echo json_encode($data);
	}

	public function ajaxGetCustomerInfo()
	{	
		$res = $this->customers_model->getCustRecord($this->input->post('user_id'));
		$data = array();
		/*foreach ($res as $key => $cust) {
			$data['data'][] = array($key+1, $cust->fname.' '.$cust->lname, $cust->address, $cust->gender_name, $cust->contact_num, $cust->birthdate, '<button type="button" class="btn btn-info btn-sm btn-cust-update" data-toggle="modal" data-target="#modal-edit" data-cust-id="'.$cust->user_id.'" ><i class="fa fa-fw fa-edit"></i></button> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-pets"><i class="fa fa-fw fa-paw"></i></button>');
		}*/
		echo json_encode($res);
	}

	public function softDeleteCust()
	{
		if ($this->global_model->softDelete('users', $this->input->post())) {
			$this->custom_library->flashDataMessage('danger', 'DELETE SUCCESS', 'Customer information successfully deleted');
		} else {
			$this->custom_library->flashDataMessage('danger', 'UPDATE ERROR', 'Customer information delete error');
		}
		redirect('admin/customers/');
	}

	public function ajaxGetDiagnose(){
		$res = $this->customers_model->getPetDiagnose($this->input->post('pet_id'));
		echo json_encode($res);
	}
		
}
