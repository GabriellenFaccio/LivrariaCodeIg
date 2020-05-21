<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Livros extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Livro_model');
			$this->load->model('Categoria_model');
			$this->load->helper('url');
			date_default_timezone_set('America/Sao_Paulo');
		}

		public function novoLivro(){
			$arrayDados['nomeCategoria'] = $this->Categoria_model->pesquisaCategoria();
			$this->load->view('paginas_livraria/cadastrarLivro', $arrayDados);
		}

		public function buscarLivro(){
			$arrayBanco['dadosLivros'] = $this->Livro_model->listarLivros();

			foreach ($arrayBanco['dadosLivros'] as $key => $value) {
				$arrayBanco['dadosLivros'][$key]->cat_id = $this->Categoria_model->buscarNomeCategoria($value->cat_id)->cat_nome;
			}
			$this->load->view('paginas_livraria/buscarLivro', $arrayBanco);
		}

		public function cadastrarNovoLivro(){
			$arrayDados['liv_titulo'] 			 = $this->input->post('liv_titulo');
			$arrayDados['liv_autor']			 = $this->input->post('liv_autor');
			$arrayDados['cat_id']				 = $this->input->post('cat_id');
			$arrayDados['liv_status']			 = $this->input->post('liv_status');
			$arrayDados['liv_num_pagina'] 		 = $this->input->post('liv_num_pag');
			$arrayDados['liv_num_edicao']		 = $this->input->post('liv_num_edi');
			$arrayDados['liv_editora'] 			 = $this->input->post('liv_editora');
			$arrayDados['liv_descricao'] 		 = $this->input->post('liv_descricao');
			$arrayDados['liv_data_criacao'] 	 = date('Y/m/d H:i:s');
			$arrayDados['liv_data_modificacao']  = date('Y/m/d H:i:s');

			$this->Livro_model->insertLivros($arrayDados);
			redirect('Livros/buscarLivro');
		}	

		public function excluirLivros($idLivro){

			$array['teste'] = $this->Livro_model->deleteLivro($idLivro);
			redirect('Livros/buscarLivro');
		}

		public function editarLivros($idLivro){
			$tableBanco['livSelect'] = $this->Livro_model->getOneTable($idLivro);
			$tableBanco['nomeCategoria'] = $this->Categoria_model->getCatAtivas();
			$this->load->view('paginas_livraria/editarLivro', $tableBanco);
		}

		public function salvarUpdateLiv($idLivro){
			$arrayDadosUp['liv_titulo'] = $this->input->post('liv_titulo');
			$arrayDadosUp['liv_autor'] = $this->input->post('liv_autor');
			$arrayDadosUp['cat_id'] = $this->input->post('cat_id');
			$arrayDadosUp['liv_status'] = $this->input->post('liv_status');
			$arrayDadosUp['liv_num_pagina'] = $this->input->post('liv_num_pagina');
			$arrayDadosUp['liv_num_edicao'] = $this->input->post('liv_num_edicao');
			$arrayDadosUp['liv_editora'] = $this->input->post('liv_editora');
			$arrayDadosUp['liv_descricao'] = $this->input->post('liv_descricao');
			$arrayDadosUp['liv_data_modificacao'] = date('Y/m/d H:i:s');

			$this->Livro_model->updateOneLivro($idLivro, $arrayDadosUp);
			redirect('Livros/buscarLivro');
		}

		public function visualizarLivro($idLivro){
			$arrayLivro['livroVis'] = $this->Livro_model->getOneTable($idLivro);
			$this->load->view('paginas_livraria/visualizarLivro', $arrayLivro);
		}

	}
?>