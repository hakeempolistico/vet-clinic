<?php
require 'Send_sms/autoload.php';
use SMSGatewayMe\Client\ApiClient;
use SMSGatewayMe\Client\Configuration;
use SMSGatewayMe\Client\Api\MessageApi;
use SMSGatewayMe\Client\Model\SendMessageRequest;

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
                
                $msg = $this->schedules_model->getMessageDetails($data);    
                switch ($status_id) {
                    case '3':
                        $sMessage =  ' your schedule has been rejected ';
                        break;
                    case '2':
                        $sMessage =  ' your schedule has been approved ';
                        break;
                }
                $msgg = $this->sendSms(json_decode(json_encode($msg), True), $sMessage);
                
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


	public function getCalendarSchedule(){
		$data = $this->input->post();
		if (!empty($data) !== false) {
			switch ($data['status']) {
				case '0':
					$res = $this->schedules_model->getAllScheduleCalendar();
					break;
				case '1':
					$res = $this->schedules_model->getApprovedScheduleCalendar();
					break;
				case '2':
					$res = $this->schedules_model->getPendingScheduleCalendar();
					break;		
			}
			echo json_encode($res);
		}else{
			echo "something wrong";
		}
	}

	public function ajaxViewSchedulebyID(){
		$aParam = $this->input->post();
		$aParam['id'] = $this->session->user_id;
		$res = $this->schedules_model->viewSchedulebyID($aParam);
		echo json_encode($res);
	}

	public function updateSchedule(){
		$aParam = $this->input->post();
		$res = $this->schedules_model->updateSchedule($aParam); 
		$msg = $this->schedules_model->getMessageDetails($aParam);    
                switch ($aParam['status']) {
                    case '3':
                        $sMessage =  ' your schedule has been rejected ';
                        break;
                    case '2':
                        $sMessage =  ' your schedule has been approved ';
                        break;
                }
                $msgg = $this->sendSms(json_decode(json_encode($msg), True), $sMessage);
		echo json_encode($res);
	}
        
        public function sendSms($aParam, $sMessage){
              
                // Configure client
                $config = Configuration::getDefaultConfiguration();
                $config->setApiKey('Authorization', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU1MDMyNzM2MSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjQxMjc3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.XaoquSINsiNnM6Hg9QHQKcraf_ToRcrJ3PWCXYtSkk4');
                $apiClient = new ApiClient($config);
                $messageClient = new MessageApi($apiClient);

                // Sending a SMS Message
                $sendMessageRequest = new SendMessageRequest([
                    'phoneNumber' => $aParam['contact_num'],
                    'message' => 'Hi! '.$aParam['fname'].', this is Makahayop Clinic, I just want to inform you that '. $sMessage . ' (' .$aParam['date'].' at '. $aParam['time']. ')',
                    'deviceId' => 100181
                ]);

                $messageClient->sendMessages([$sendMessageRequest]);
     
        }
}
