<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Array_helper_demo extends CI_Controller{
 	public function index(){
 		$this->load->helper("array");
 		$data['seo']=array(
			"meta_desc"=>"This is the description of the page",
			"meta_key"=>"this,is,a,keywords",
			"title"=> "This is my title"
 		);
 			$this->load->view('array_helper_view',$data);
 	}
 }



?>