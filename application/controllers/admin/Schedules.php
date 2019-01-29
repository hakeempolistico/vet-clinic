<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedules extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Admin');
	    $this->load->model('admin/schedules_model');
	}

	public function list()
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Schedules',
				'subContentTitle' => 'Displayed schedules in list view',
				'breadCrumbIcon' => 'fa-calendar-check-o',
				'breadCrumbBase' => 'Schedules',
				'listView' => 'list',
			),
			'page' => 'schedules_list',
		);
		$this->load->view('admin/template', $data);
	}

	public function ajaxGetSchedules(){
		$schedules = $this->schedules_model->getSchedules();
		$data = array();
		foreach ($schedules as $key => $sched) {
			switch ($sched->name) {
				case 'Pending':
					$status = '<span class="badge bg-yellow">Pending</span>';
					$action = '<a type="button" class="btn btn-info btn-xs btn-approve" href="#" data-toggle="modal" data-target="#modal-approve-confirm" data-schedid="'.$sched->schedule_id.'""><i class="fa fa-fw fa-check"></i></a> <a type="button" class="btn btn-danger btn-xs btn-reject" href="#" data-toggle="modal" data-target="#modal-disapprove-confirm" data-schedid="'.$sched->schedule_id.'""><i class="fa fa-fw fa-close"></i></a>';
					break;
				case 'Approved':
					$status = '<span class="badge bg-green">Approved</span>';
					$action = '';
					break;
				case 'Rejected':
					$status = '<span class="badge bg-red">Rejected</span>';
					$action = '';
					break;
				default:
					# code...
					break;
			}
			$data['data'][] = array($key+1, $sched->fname.' '.$sched->lname, $sched->pet_name, $sched->date_time, $status, $action);
		}
		echo json_encode($data);
	}

	public function setSchedStatus(){
		$data = $this->input->post();
		$status = $this->global_model->getRow('schedule_status', 'name', $data['status_name'] );
		if ($status) {
			$status_id = $status->id;
		}
		if ($this->global_model->update('schedules', 'schedule_id', $data['schedule_id'], array('status' => $status_id))) {
			$this->custom_session->flashDataMessage('success', 'Success', 'Schedule updated');
			redirect('admin/schedules/list');
		}
		
	}

	public function calendar(){
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Schedules',
				'subContentTitle' => 'Displayed schedules in calendar view',
				'breadCrumbIcon' => 'fa-calendar-check-o',
				'breadCrumbBase' => 'Schedules',
				'listView' => 'calendar',
			),
			'page' => 'schedules_caledar',
		);
		$this->load->view('admin/template', $data);
	}

	public function getAllCalendar(){
		// getScheduleCalendar
	}
}
