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

		$data['user_password'] = password_hash($data['user_password'], PASSWORD_BCRYPT);
		$data['user_type_id'] = $this->global_model->getUserType('Customer');
		unset($data['confirm_password']);

		$user_data = array(
			'user_email' => $data['user_email'],
			'user_password' => $data['user_password'],
			'user_type_id' => $data['user_type_id']
		);

		$this->global_model->insert('users', $user_data);

		$profile = array(
			'user_id' => $this->global_model->getUserId($data['user_email']),
			'fname' => $data['fname'],
			'lname' => $data['lname'],
			'address' => $data['address'],
			'contact_num' => $data['contact_num']
		);

		if($this->global_model->insert('profiles', $profile)){
                        $this->session->set_flashdata('alert-type', 'success');
                        $this->session->set_flashdata('message', 'User Successfuly Registered');
                        $this->session->set_flashdata('sub-message', 'Please update your profile in Profile Tab');
                        //print_r($this->session->flashdata()); exit;
                        redirect('site/dashboard');
                }

        }

	}

	public function register()
	{
		$this->load->view('site/signup');
	}
}
