<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Custom_session {
	
	private $CI;

	public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper('url');
		$this->CI->load->library('session');
    }

    public function checkSession($usertype)
    {	
    	if(!isset($this->CI->session->logged_in) && !$this->CI->session->user_type_name == $usertype) {
			redirect('site/signin');
		}
		else
			return;	
    }

    public function usertypeRedirect($usertype)
    {
    	switch ($usertype) {
		    case "Admin":
		        redirect('admin/dashboard');
		        break;
		    case "Customer":
		        redirect('site/dashboard');
		        break;
		    default:
		        redirect('site/signin');
		}
    }

    public function flashDataMessage($type, $message, $sub){
    	if (!$type || !$message) {
    		return FALSE;
    	}
        $this->CI->session->set_flashdata('alert-type', $type);
        $this->CI->session->set_flashdata('message', $message);
        $this->CI->session->set_flashdata('sub-message', $sub);
    }

}