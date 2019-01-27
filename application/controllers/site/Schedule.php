<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();

	    $this->load->model('site/schedule_model');
	    $this->load->model('site/pet_model');
	    $this->custom_session->checkSession('Customer');

	}
 
	public function index()
	{	
		
		$this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('pet_id', 'Pet', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');

		if ($this->form_validation->run() == FALSE){
        	 $this->loadviewSchedule();
        } else{

        		$data_insert = $this->input->post();

        		//Get User Id 
    			$data_insert['user_id'] = $this->session->user_id;

    			//Change format of date
    			$originalDate = $data_insert['date'];
				$newDate = date("Y-m-d", strtotime($originalDate)); 

				//Change format of time
				// $originalTime = $data_insert['time'];
				// $newTime  = date("H:i", strtotime($originalTime));

				//Final Date Format 
				$data_insert['date_time'] = $newDate.' '.$data_insert['time'];
				$data_insert['date'] = $newDate;
				// Unset data
				unset($data_insert['form_type']);


        		if($this->global_model->insert('schedules', $data_insert)){
		            //Flash Data
		            $this->session->set_flashdata('alert-type', 'success');
		            $this->session->set_flashdata('message', 'Success');
		            $this->session->set_flashdata('sub-message', 'Successfuly Add Schedule');

		            redirect('site/schedule');
        		}

        }


	}

	public function loadviewSchedule(){

		$data_view = array( 'profile' => $this->global_model->getRow('profiles', 'user_id', $this->session->user_id),
		'pet' => $this->pet_model->getCustPet($this->session->user_id),
		'user' => $this->global_model->getRow('users', 'user_id', $this->session->user_id), 
		'calendar' => $this->schedule_model->getCalendarDetails($this->session->user_id)
		);
		// print_r($data_view['time']);
		$this->load->view('site/schedule', $data_view);

	}

	public function ajaxGetTimeAvailable(){
		$aParam = $this->input->post();

		$aParam['date'] = date("Y-m-d", strtotime($aParam['date'])); 

		$res = $this->schedule_model->getTimeScheduleAvailable($aParam);
		echo json_encode($res);
	}

	public function ajaxGetListView(){
		$aParam = $this->input->post();
		$aParam['id'] = $this->session->user_id;

		$res = $this->schedule_model->getGetListView($aParam);
		echo json_encode($res);
	}

	public function ajaxGetListViewTop10Approved(){
		$aParam = $this->input->post();
		$aParam['id'] = $this->session->user_id;

		$res = $this->schedule_model->viewTop10ApprovedSchedules($aParam);
		echo json_encode($res);
	}

	public function ajaxViewSchedulebyID(){
		$aParam = $this->input->post();
		$aParam['id'] = $this->session->user_id;
		$res = $this->schedule_model->viewSchedulebyID($aParam);
		echo json_encode($res);
	}

	public function ajaxCancel(){
		$aParam = $this->input->post();
		$aParam['status'] = '4';
		$res = $this->schedule_model->cancelSchedule($aParam);
		echo json_encode($res);
	}

	public function ajaxDelete(){
		$aParam = $this->input->post();
		$aParam['is_deleted'] = '1';
		$res = $this->schedule_model->deleteSchedule($aParam);
		echo json_encode($res);
	}

}
