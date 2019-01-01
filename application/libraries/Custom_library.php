<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Custom_library {
	
    public function debug($arr){
		echo '<pre>';
		print_r($arr);
		echo '<pre>';
		exit;
    }
}