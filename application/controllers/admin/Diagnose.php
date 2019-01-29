<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnose extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Admin');
	    $this->load->model('admin/schedules_model');
	}

	public function index()
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Diagnose',
				'subContentTitle' => 'Manage diagnose of schedules',
				'breadCrumbIcon' => 'fa-medkit',
				'breadCrumbBase' => 'Diagnose',
			),
			'page' => 'diagnose',
		);
		$this->load->view('admin/template', $data);
	}

	public function schedule($id)
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Diagnose',
				'subContentTitle' => 'Manage diagnose of schedules',
				'breadCrumbIcon' => 'fa-medkit',
				'breadCrumbBase' => 'Diagnose',
			),
			'page' => 'diagnose_sched',
		);
		$this->load->view('admin/template', $data);
	}

	public function ajaxGetSchedule()
	{
		$res = $this->schedules_model->getSchedules();
		$data = array();
		foreach ($res as $key => $sched) {
			$url = site_url('admin/diagnose/schedule/');
			$action = '<a type="button" class="btn btn-info btn-xs" href="'.$url.$sched->schedule_id.'"><i class="fa fa-fw fa-search"></i></a>';
			$data['data'][] = array($key+1, $sched->fname.' '.$sched->lname, $sched->pet_name, $sched->date_time, $action);
		}
		echo json_encode($data);
	}
}
