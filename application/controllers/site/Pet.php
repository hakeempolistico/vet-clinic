<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pet extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkCustomerSession();
	    $this->load->model('site/pet_model');
	}

	public function index()
	{
		$data = array(
			'profile' => $this->global_model->getRow('profiles', 'user_id', $this->session->user_id),
			'user' => $this->global_model->getRow('users', 'user_id', $this->session->user_id),
			'species' => $this->global_model->getRecords('pet_types'),
			'gender' => $this->global_model->getRecords('gender'),
			'pet_status' => $this->global_model->getRecords('pet_status'),
		);
		$this->load->view('site/pet', $data);
	}

	public function registerPet()
	{
		$data = $this->input->post();
		$data['user_id'] = $this->session->user_id;


		if($data['form_type']){
			$pet_id = $data['form_type'];
			unset($data['form_type']);
			$this->global_model->update('pets', 'pet_id', $pet_id, $data);

            //Flash Data
        	$this->custom_library->flashDataMessage('success', 'Pet Updated', 'Pet information updated');
        	
            redirect('site/pet'); exit;
		}

		unset($data['form_type']);
		$this->global_model->insert('pets', $data);

        //Flash Data
        $this->custom_library->flashDataMessage('success', 'Pet Registered', 'Pet information added');
		

		redirect('site/pet');

	}

	public function ajaxGetCustPet()
	{	
		$res = $this->pet_model->getCustPet($this->session->user_id);
		$data = array();
		foreach ($res as $key => $pet) {
			$data['data'][] = array($key+1, $pet->pet_name, $pet->pet_type_name, $pet->pet_breed, $pet->gender_name, $pet->pet_age, $pet->pet_description, $pet->pet_status_name, '<div class="text-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#pet_view_modal"><i class="mdi mdi-magnify"></i></button> <button id="btn-action-update" type="button" class="btn btn-info" data-toggle="modal" data-target="#pet_form_modal" data-pet-id="'.$pet->pet_id.'"><i class="mdi mdi-grease-pencil"></i></button> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmation_modal"><i class="mdi mdi-delete"></button></div>' );
		}
		echo json_encode($data);
	}

	public function ajaxGetPetInfo()
	{	
		$data = $this->pet_model->getCustPet($this->session->user_id, $this->input->post('pet_id'));
		echo json_encode($data);
	}
}
