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

		public function listarCategoria(){
			$select = $this->db->get('categoria');
			return $select->result();
		}

		public function getOneTable($idSelect){
			$this->db->where('cat_id', $idSelect);
			$select = $this->db->get('categoria');
			return $select->result();
		}

		public function updateOneCategoria($id, $dados){
			$this->db->where('cat_id', $id);
			$this->db->update('categoria', $dados);
		}

		public function deleteOneCategoria($id){
			$this->db->where('cat_id', $id);
			$this->db->delete('categoria');
		}
	}
?>