<?php
	class Livro_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function insertLivros($arrayDados){
			$insert = $this->db->insert('livro', $arrayDados);
		}

		public function listarLivros(){
			$select = $this->db->get('livro');
			return $select->result();
		}
	}
?>