<?php
	class livraria_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function insertLivros($arrayDados){
			$insert = $this->db->insert('livraria', $arrayDados);
		}
	}
?>