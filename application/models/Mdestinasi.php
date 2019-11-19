<?php 
	class Mdestinasi extends CI_Model{
		var $table = 'destinasi';
	
		function getData($data=array()){
			return $this->db->get_where($this->table,$data);
		}
		function getDetail($data=array()){
			return $this->db->get_where($this->table,$data);
		}
	}
 ?>