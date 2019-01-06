<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Customer');
	}

	public function index()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('gender_id', 'Gender', 'required');
        $this->form_validation->set_rules('contact_num', 'Contact Number', 'required');


        if ($this->form_validation->run() == FALSE)
        {
        	$this->loadView();
        }
        else
        {
        	if($this->global_model->update('profiles', 'user_id', $this->session->user_id, $this->input->post())){
	            //Flash Data
	            $this->session->set_flashdata('alert-type', 'success');
	            $this->session->set_flashdata('message', 'Success');
	            $this->session->set_flashdata('sub-message', 'Successfuly Updated Profile');
	            
        		$this->loadView();
        	}
        }
	}

	private function loadView()
	{
		$data = array(
			'profile' => $this->global_model->getRow('profiles', 'user_id', $this->session->user_id),
			'user' => $this->global_model->getRow('users', 'user_id', $this->session->user_id)
		);
	    $this->load->view('site/profile', $data);
	}
}
