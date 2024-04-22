<?php 

	class User_model extends CI_Model{
		function return_users(){
			
			$query= $this->db->get_where('user',array('company'=>'ghf','id'=>'5'));
			$query->result_array();
			
			return $query->result();
		}
	}

 ?>