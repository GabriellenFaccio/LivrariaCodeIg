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
			return $this->db->select(array('cat_id','cat_nome','cat_status','cat_descricao'))->get('categoria')->result();
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
			$this->db->where('cat_id', $id)->delete('categoria');
		}

		public function selectLivrosCat($idCategoria){
			$this->db->where('$cat_id', $idCategoria);
			$select = $this->db->select('livro');
			return $select->result();
		}

		public function buscarNomeCategoria($idCategoria){
			return $this->db->where('cat_id', $idCategoria)->select(array('cat_nome'))->get('categoria')->result()[0];
		}

		public function getAllMenosCatExcluira($idCategoria){
			return $this->db->where('cat_id <>', $idCategoria)->select(array('cat_id','cat_nome'))->get('categoria')->result();
		}

		public function getCatAtivas(){
			return $this->db->where('cat_status', 1)->select(array('cat_nome','cat_id'))->get('categoria')->result();
		}

		public function getAllCat(){
			return $this->db->select(array('cat_id','cat_nome'))->get('categoria')->result();
		}
	}
?>