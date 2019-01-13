<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
        $this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));

		$this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|is_unique[users.user_email]');

		$this->form_validation->set_rules('user_password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[user_password]');


        if ($this->form_validation->run() == FALSE)
        {
               $this->load->view('site/signup');
        }
        else
        {		
			$this->load->model('global_model');
			$data = $this->input->post();

			if (empty($data)) {
	        	//Flash Data
	        	$this->custom_library->flashDataMessage('danger', 'ERROR', 'Registration error. Please fill up form.');
				redirect('site/signup');
			}

			$data['user_password'] = password_hash($data['user_password'], PASSWORD_BCRYPT);
			$data['user_type_id'] = $this->global_model->getUserType('Customer');
			unset($data['confirm_password']);

			$user_data = array(
				'user_email' => $data['user_email'],
				'user_password' => $data['user_password'],
				'user_type_id' => $data['user_type_id']
			);

			$this->global_model->insert('users', $user_data);
	        $user_id = $this->global_model->getUserId($data['user_email']);

			$profile = array(
				'user_id' => $user_id,
				'fname' => $data['fname'],
				'lname' => $data['lname'],
				'address' => $data['address'],
				'contact_num' => $data['contact_num'],
				'gender_id' => $data['gender_id']
			);

			if ($this->global_model->insert('profiles', $profile)) {
	            //Flash Data
	            $this->custom_library->flashDataMessage(
	            	'success', 
	            	'User Successfuly Registered', 
	            	'Please update your profile in Profile Tab'
	            );

	            //Session
	            $userData = array(
	                    'logged_in' => TRUE,
	                    'user_id' => $user_id,
	                    'user_type_name' => $this->global_model->getUserTypeName($data['user_email'])
	            );
	            $this->session->set_userdata($userData);
	        } else {
	        	//Flash Data
	        	$this->custom_library->flashDataMessage('danger', 'ERROR', 'Registration error');
	        }


            //Redirect
            redirect('site/dashboard');

        }

	}

	public function register()
	{
		$this->load->view('site/signup');
	}
}
