<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Livros extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Livro_model');
			$this->load->helper('url');
			date_default_timezone_set('America/Sao_Paulo');
		}

		public function novoLivro(){
			$arrayDados['nomeCategoria'] = $this->Livro_model->pesquisaCategoria();
			$this->load->view('paginas_livraria/cadastrarLivro', $arrayDados);
		}

		public function novaCategoria(){
			$this->load->view('paginas_livraria/cadastrarCategoria');
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
			redirect('paginas_livraria/cadastrarLivro');
		}

		public function cadastrarNovaCategoria(){
			$arrayDadosCat['cat_nome']				= $this->input->post('cat_nome');
			$arrayDadosCat['cat_status'] 			= $this->input->post('cat_status');
			$arrayDadosCat['cat_descricao'] 		= $this->input->post('cat_descricao');
			$arrayDadosCat['cat_data_criacao']  	= date('Y/m/d H:i:s');
			$arrayDadosCat['cat_data_modificacao']  = date('Y/m/d H:i:s');

			$this->Livro_model->insertCategoria($arrayDadosCat);
			redirect('paginas_livraria/cadastrarCategoria');
		}
	}
?>