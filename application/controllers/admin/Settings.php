<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->custom_session->checkSession('Admin');
	}

	public function index()
	{
		$data = array(
			'contentHeader' => array(
				'contentTitle' => 'Settings',
				'subContentTitle' => 'Manage admin',
				'breadCrumbIcon' => 'fa-gear',
				'breadCrumbBase' => 'Settings',
			),
			'page' => 'settings',
		);
		$this->load->view('admin/template', $data);
	}

	public function changePassword(){

		//Form Rules
		$this->form_validation->set_rules('user_password', 'USER PASSWORD', 'callback_password_check');
		$this->form_validation->set_rules('new_password', 'NEW PASSWORD', 'required');
		$this->form_validation->set_rules('confirm_password', 'CONFIRM PASSWORD', 'required|matches[new_password]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {	
        	$new_password = password_hash($this->input->post('new_password'), PASSWORD_BCRYPT);
        	//if(password_verify('password', $new_password)) echo 'MATCHED'; exit;

			if($this->global_model->update('users', 'user_id', $this->session->user_id, array('user_password' => $new_password))) {
				//Flash Data
				$this->custom_session->flashDataMessage('success', 'SUCCESS', 'Password successfully updated!');
        		redirect('admin/settings');
			}
	    } 
	}

	public function password_check($str)
        {
        	$userdata = $this->global_model->getRow('users', 'user_id', $this->session->user_id);
            if (!password_verify($str, $userdata->user_password))
            {
                $this->form_validation->set_message('password_check', "The OLD PASSWORD doesn't match");
                return FALSE;
            }
            else
            {
                return TRUE;
            }
        }
}
