<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Categorias extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Categoria_model');
			$this->load->helper('url');
			date_default_timezone_set('America/Sao_Paulo');
		}

		public function novaCategoria(){
			$this->load->view('paginas_livraria/cadastrarCategoria');
		}

		public function cadastrarNovaCategoria(){
			$arrayDadosCat['cat_nome']				= $this->input->post('cat_nome');
			$arrayDadosCat['cat_status'] 			= $this->input->post('cat_status');
			$arrayDadosCat['cat_descricao'] 		= $this->input->post('cat_descricao');
			$arrayDadosCat['cat_data_criacao']  	= date('Y/m/d H:i:s');
			$arrayDadosCat['cat_data_modificacao']  = date('Y/m/d H:i:s');

			$this->Categoria_model->insertCategoria($arrayDadosCat);
			redirect('Categorias/novaCategoria');
		}
	}
?>