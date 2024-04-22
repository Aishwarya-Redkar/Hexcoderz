<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class My_controller extends CI_Controller{
 	public function index(){
 	$this->load->view('myindexview');
 	}

 	public function test(){
 		$this->load->model('authentication_from_google','google');
 		$firstName = $this->google->userData();
 	
 		echo "Name is ->" .$firstName;

 	}
 }

?>