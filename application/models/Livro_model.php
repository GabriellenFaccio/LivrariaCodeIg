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
	}
?>