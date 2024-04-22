<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller{
	function index(){
		$this->load->library('test_lib');
		$str=$this->test_lib->test_1();
		echo $str;

		//echo "index method of our test controller";
	}
	function test_index(){
		echo "Test index method of our test controller";
	}
}

?>