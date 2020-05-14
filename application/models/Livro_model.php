<?php
	class Livro_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function insertLivros($arrayDados){
			$insert = $this->db->insert('livro', $arrayDados);
		}

		public function listarLivros(){
			return $this->db->select(array('liv_titulo','cat_id','liv_status','liv_num_pagina','liv_num_edicao','liv_autor','liv_editora','liv_descricao'))->get('livro')->result();
		}

		public function getLivrosNaCat($idCategoria){
			return $this->db->where('cat_id', $idCategoria)->select(array('liv_id','cat_id'))->get('livro')->result();
		}

		public function getCategoriaLiv($idCategoria){
			return $this->db->where('cat_id', $idCategoria)->select(array('cat_id'))->get('livro')->result();
		}

		public function livrosIndisponiveis($arrayLivros, $idCategoria){
			$this->db->where('cat_id', $idCategoria)->update('livro', array('liv_status' => "Indisponivel"));
		}

		public function updateLivrosNovaCat($categoriaNova, $categoriaAnt){
			$this->db->where('cat_id', $categoriaAnt)->update('livro', array('cat_id' => $categoriaNova));
		}
	}
?>