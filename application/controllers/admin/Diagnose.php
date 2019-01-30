<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnose extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Admin');
	    $this->load->model('admin/schedules_model');
	    $this->load->model('admin/pets_model');
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
		$schedule = $this->schedules_model->getSchedule($id);
		$diagnose = $this->global_model->getRecords('diagnose', array('col'=>'schedule_id', 'val'=>$id));
		$pet = $this->pets_model->getPet($schedule[0]->pet_id);
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Diagnose',
				'subContentTitle' => 'Manage diagnose of schedules',
				'breadCrumbIcon' => 'fa-medkit',
				'breadCrumbBase' => 'Diagnose',
			),
			'page' => 'diagnose_sched',
			'schedules' => $schedule,
			'diagnose' => $diagnose,
			'pet' => $pet
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
