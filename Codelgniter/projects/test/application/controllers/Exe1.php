<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Exe1 extends CI_Controller {

		public function index() {

			$this->load->model('exe2');
			$this->load->view('exe3');
		}
	}