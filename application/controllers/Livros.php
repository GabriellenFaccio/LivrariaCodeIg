<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Livros extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Livro_model');
			$this->load->helper('url');
		}

		public function novoLivro(){
			$this->load->view('paginas_livraria/cadastrarLivro');
		}

		public function novaCategoria(){
			$this->load->view('paginas_livraria/cadastrarCategoria');
		}

		public function cadastrarNovoLivro(){
			$arrayDados['liv_titulo'] 		= $this->input->post('titulo');
			$arrayDados['liv_autor']		= $this->input->post('autor');
			$arrayDados['liv_categoria']	= $this->input->post('categoria');
			$arrayDados['liv_status']		= $this->input->post('status');
			$arrayDados['liv_data_emp'] 	= $this->input->post('data_emp');
			$arrayDados['liv_num_pagina'] 	= $this->input->post('num_pag');
			$arrayDados['liv_num_edicao']	= $this->input->post('num_edi');
			$arrayDados['liv_editora'] 		= $this->input->post('editora');
			$arrayDados['liv_descricao'] 	= $this->input->post('descricao');

			$this->Livro_model->insertLivros($arrayDados);
		}

		public function cadastrarNovaCategoria(){
			$arrayDadosCat['cat_nome']			   = $this->input->post('cat_nome');
			$arrayDadosCat['cat_status'] 		   = $this->input->post('cat_status');
			$arrayDadosCat['cat_data_criacao'] 	   = $this->input->post('cat_data_criacao');
			$arrayDadosCat['cat_data_modificacao'] = $this->input->post('cat_data_modificacao');

			$this->Livro_model->insertCategoria($arrayDadosCat);
		}
	}
?>