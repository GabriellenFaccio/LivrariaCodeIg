<?php
	class Livro_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function insertLivros($arrayDados){
			$insert = $this->db->insert('livro', $arrayDados);
		}

		public function insertCategoria($arrayDados){
			$insert = $this->db->insert('categoria', $arrayDados);
		}

		public function pesquisaCategoria(){
			$selectCat = $this->db->get('categoria');
			return $selectCat->result();
		}
	}
?>