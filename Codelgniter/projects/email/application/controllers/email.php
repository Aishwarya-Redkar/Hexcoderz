<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Email extends CI_Controller{
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{
			
			$this->load->library('email');
				$this->email->set_newline("\r\n");

			$this->email->from('redkar.aishwarya@gmail.com','Aishwarya Redkar');
			$this->email->to('redkar.aishwarya@gmail.com');
			$this->email->subject('This is an email test');
			$this->email->message('It is working. Great!');
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