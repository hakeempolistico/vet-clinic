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
			redirect('site/signin'); exit;
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

}