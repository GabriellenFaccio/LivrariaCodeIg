<?php
	class Categoria_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function insertCategoria($arrayDados){
			$insert = $this->db->insert('categoria', $arrayDados);
		}

		public function pesquisaCategoria(){
			$this->db->where('cat_status', "1");
			$select = $this->db->get('categoria');
			return $select->result();
		}
	}
?>