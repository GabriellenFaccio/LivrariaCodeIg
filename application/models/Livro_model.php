<?php
	class Livro_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function insertLivros($arrayDados){
			$insert = $this->db->insert('livro', $arrayDados);
		}

		public function listarLivros(){
			return $this->db->select(array('liv_id','liv_titulo','cat_id','liv_status','liv_num_pagina','liv_num_edicao','liv_autor','liv_editora','liv_descricao'))->get('livro')->result();
		}

		public function getLivrosNaCat($idCategoria){
			return $this->db->where('cat_id', $idCategoria)->select(array('liv_id','cat_id'))->get('livro')->result();
		}

		public function getOneTable($idLivro){
			return $this->db->where('liv_id', $idLivro)->select(array('liv_id','liv_titulo','cat_id','liv_status','liv_num_pagina','liv_num_edicao','liv_autor','liv_editora','liv_descricao'))->get('livro')->result();
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

		public function selectLivMenosEmp(){
			return $this->db->where('liv_status <>', "Emprestado")->select(array('liv_id','liv_titulo','liv_status','liv_num_pagina','liv_num_edicao','liv_autor','liv_editora','liv_descricao'))->get('livro')->result();
		}

		public function deleteLivro($idLivro){
			$this->db->where('liv_status', "Emprestado");
			$this->db->where('liv_id', $idLivro)->delete('livro');
		}

		public function selectLivroEmp($idLivro){
			return $this->db_where('liv_id', $idLivro)->select(array('liv_status'))->get('livro')->result();
		}
	}

?>