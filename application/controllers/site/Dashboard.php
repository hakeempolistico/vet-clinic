<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('site/schedule_model');
	    $this->custom_session->checkSession('Customer');
	}

	public function index()
	{	
		$data = array(
			'profile' => $this->global_model->getRow('profiles', 'user_id', $this->session->user_id),
			'user' => $this->global_model->getRow('users', 'user_id', $this->session->user_id),
			'calendar' => $this->schedule_model->getCalendarDetails($this->session->user_id)
		);
		$this->load->view('site/dashboard', $data);
	}

	public function ajaxGetListViewTop10Approved(){
		$aParam = $this->input->post();
		$aParam['id'] = $this->session->user_id;

		$res = $this->schedule_model->viewTop10ApprovedSchedules($aParam);
		echo json_encode($res);
	}
}
