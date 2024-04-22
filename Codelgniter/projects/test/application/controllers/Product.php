<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

			public function index($product_name='')
			{

				echo "<h1>$product_name</h1>";
				$this->load->view('product_view');
			}
}


?>