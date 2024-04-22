<?php
	class User_details extends CI_Controller{

		function index(){
		
			$this->load->helper('common_helper');
			echo add();
			echo returnHello();
			

			$this->load->model('user_model');
			$data['userArray'] = $this->user_model->return_users();
			$this->load->view('user_view',$data);
		}


	}



?>