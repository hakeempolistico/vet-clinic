<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Custom_library {
	
	private $CI;

	public function __construct()
    {
        $this->CI =& get_instance();
		$this->CI->load->library('session');
    }

    public function debug($arr){
		echo '<pre>';
		print_r($arr);
		echo '<pre>';
		exit;
    }

    public function flashDataMessage($type, $message, $sub){
        $this->CI->session->set_flashdata('alert-type', $type);
        $this->CI->session->set_flashdata('message', $message);
        $this->CI->session->set_flashdata('sub-message', $sub);
    }
}