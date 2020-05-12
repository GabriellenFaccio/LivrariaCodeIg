<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Livraria extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('livraria_model');
			$this->load->helper('url');
		}

		public function novoLivro(){
			$this->load->view('paginas_livraria/cadastrarLivro');
		}

		public function cadastrarNovoLivro(){
			$arrayDados['titulo'] = $this->input->post('titulo');
			$arrayDados['autor'] = $this->input->post('autor');
			$arrayDados['categoria'] = $this->input->post('categoria');
			$arrayDados['status'] = $this->input->post('status');
			$arrayDados['data_emp'] = $this->input->post('data_emp');
			$arrayDados['num_pag'] = $this->input->post('num_pag');
			$arrayDados['num_edi'] = $this->input->post('num_edi');
			$arrayDados['editora'] = $this->input->post('editora');
			$arrayDados['descricao'] = $this->input->post('descricao');

			$this->livraria_model->insertLivros($arrayDados);
		}
	}
?>