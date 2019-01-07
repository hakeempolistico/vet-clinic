<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
<<<<<<< HEAD
	    $this->custom_session->checkCustomerSession();
	    $this->load->model('site/schedule_model');
	    $this->load->model('site/pet_model');
=======
	    $this->custom_session->checkSession('Customer');
>>>>>>> a0d9f2521451ec1e852e4f5877abe44d58b01752
	}

	public function index()
	{	
		$data_view = array( 'profile' => $this->global_model->getRow('profiles', 'user_id', $this->session->user_id),
		'pet' =>$this->pet_model->getCustPet($this->session->user_id),
		'user' => $this->global_model->getRow('users', 'user_id', $this->session->user_id) );


		$this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('pet_id', 'Pet', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');


		if ($this->form_validation->run() == FALSE){
        	$this->load->view('site/schedule', $data_view);
        } else{

        		$data_insert = $this->input->post();

        		if(isset($data_insert['form_type'])){

        			//Get User Id 
        			$data_insert['user_id'] = $this->session->user_id;

        			//Change format of date
        			$originalDate = $data_insert['date'];
					$newDate = date("Y-m-d", strtotime($originalDate));

					//Change format of time
					$originalTime = $data_insert['time'];
					$newTime  = date("H:i", strtotime($originalTime));

					//Final Date Format 
					$data_insert['date_time'] = $newDate.' '.$newTime;
					
					// Unset data
					unset($data_insert['form_type'],
						  $data_insert['date'],
						  $data_insert['time']);

					//Insert Function 
					$this->global_model->insert('schedules', $data_insert);
		
		            //Flash Data
		            $this->session->set_flashdata('alert-type', 'success');
		            $this->session->set_flashdata('message', 'Success');
		            $this->session->set_flashdata('sub-message', 'Successfuly Add Schedule');
		         
        		}

        		$this->load->view('site/schedule', $data_view); 
        	
        }


	}
}
