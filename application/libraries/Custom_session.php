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

        public function checkSession()
        {	
        	if(!isset($this->CI->session->logged_in)) {
				redirect(base_url()); exit;
			}
			else
				return;	
        }

        public function checkCustomerSession()
        {	
        	if(!isset($this->CI->session->logged_in) && !$this->CI->session->user_type_name == 'Customer') {
				redirect(base_url()); exit;
			}
			else
				return;	
        }

        public function checkAdminSession()
        {	
        	if(!isset($this->CI->session->logged_in) && !$this->CI->session->user_type_name == 'Admin') {
				redirect(base_url()); exit;
			}
			else
				return;	
        }

        public function debug($arr){
			echo '<pre>';
			print_r($arr);
			echo '<pre>';
			exit;
        }
}