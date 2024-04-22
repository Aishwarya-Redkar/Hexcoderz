<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Email extends CI_Controller{
		function __construct()
		{
			parent::__construct();
		}
		function index(){
			$this->load->view('newsletter');
		}
		function send()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'trim|required');		
				$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');

				if($this->form_validation->run()==FALSE){
					$this->load->view('newsletter');
				}
				else{
					$name=$this->input->post('name');
					$email=$this->input->post('email');

							$this->load->library('email');
				$this->email->set_newline("\r\n");

			$this->email->from('redkar.aishwarya@gmail.com','Aishwarya Redkar');
			$this->email->to($email);
			$this->email->subject('Signup');
			$this->email->message('Test Newsletter Signup!');
			$path=$this->config->item('server_root');
			$file=$path . '/email/attachments/yourinfo.txt';
			$file1=$path . '/email/attachments/bunny.png';
			$file2=$path . '/email/attachments/DENTIST MANAGEMENT SYSTEM.docx';
			$file3=$path . '/email/attachments/synopsis (1).pdf';
			$file4=$path . '/email/attachments/sass.rar';

			$this->email->attach($file);
			$this->email->attach($file1);
				$this->email->attach($file2);
					$this->email->attach($file3);
						$this->email->attach($file4);
		
		
				if($this->email->send()){
					echo 'Your email was sent!!';
				}
				else{
					show_error($this->email->print_debugger());
				}
				}

	

		}

	}