<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function index()
	{
        $this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));

		//Form Rules
        $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('user_password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
            $this->load->view('site/signin');
        }
        else {
        	$this->load->model('global_model');
        	$data = $this->input->post();

        	$credentials = $this->global_model->getRow('users', 'user_email', $data['user_email']);
        	if(!$credentials){
                //Flash Data
                $this->session->set_flashdata('error_message', 'Email or password is incorrect!');
        		redirect('site/signin');
        	}
        	if(password_verify($data['user_password'], $credentials->user_password)){
        		//Session
                $userData = array(
                        'logged_in' => TRUE,
                        'user_id' => $this->global_model->getUserId($data['user_email']),
                        'user_type_name' => $this->global_model->getUserTypeName($data['user_email'])
                );
                $this->session->set_userdata($userData);

                //Redirect
                redirect('site/dashboard');
        	}
        	else{
                //Flash Data
                $this->session->set_flashdata('error_message', 'Email or password is incorrect!');
        		redirect('site/signin');
        	}
        }

		
	}
}
