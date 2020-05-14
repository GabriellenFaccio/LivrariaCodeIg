<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Categorias extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Categoria_model');
			$this->load->model('Livro_model');
			$this->load->helper('url');
			date_default_timezone_set('America/Sao_Paulo');
		}

		public function novaCategoria(){
			$this->load->view('paginas_livraria/cadastrarCategoria');
		}

		public function buscarCategoria(){
			$arrayBanco['dadosCategoria'] = $this->Categoria_model->listarCategoria();
			$this->load->view('paginas_livraria/buscarCategoria', $arrayBanco);
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

		public function visualizarCategoria($idCategoria){
			$tableBanco['catSelect'] = $this->Categoria_model->getOneTable($idCategoria);
			$this->load->view('paginas_livraria/visualizarCategoria', $tableBanco);
		}

		public function editarCategoria($idCategoria){
			$tableBanco['catSelect'] = $this->Categoria_model->getOneTable($idCategoria);
			$this->load->view('paginas_livraria/editarCategoria', $tableBanco);
		}

		public function desejaExcluirCat($idCategoria){
			// usar o id para que esse id de Categoria nao venha.
			$arrayBanco['dadosCategoria'] = $this->Categoria_model->listarCategoria();
			$arrayBanco['idCategoriaExcluira'] = $idCategoria;
			$this->load->view('paginas_livraria/desejaExcluir', $arrayBanco);
		}

		public function excluirCategoria($idCategoria){
			$newCategoria = $this->input->post('newCategoria');

			$arrayBanco['livrosCategoriaAnt'] = $this->Livro_model->getLivrosNaCat($idCategoria);

			foreach ($arrayBanco['livrosCategoriaAnt'] as $key => $value){
				$arrayBanco['livrosCategoriaAnt'][$key]->cat_id = $newCategoria;
			}

			echo "<pre>";
			print_r($arrayBanco['livrosCategoriaAnt']);
			die;

			/*foreach ($arrayBanco['dadosLivros'] as $key => $value) {
				$arrayBanco['dadosLivros'][$key]->cat_id = $this->Categoria_model->buscarNomeCategoria($value->cat_id)->cat_nome;
			}*/
			//$this->Categoria_model->updateLivrosNewCat($newCategoria);
			// update tem que estar no controller dos livros

			//$this->Categoria_model->deleteOneCategoria($idCategoria);
			redirect('welcome');
		}

		public function salvarUpdateCat($idCategoria){
			$arrayDadosUp['cat_nome'] 			  = $this->input->post('cat_nome');
			$arrayDadosUp['cat_status']		      = $this->input->post('cat_status');
			$arrayDadosUp['cat_descricao'] 		  = $this->input->post('cat_descricao');
			$arrayDadosUp['cat_data_modificacao'] = date('Y/m/d H:i:s');

			if ($arrayDadosUp['cat_status'] == 0) {
				$outrasCa['categorias'] = $this->Categoria_model->getAllMenosCatExcluira($idCategoria);
				$this->load->view('paginas_livraria/desejaExcluir', $outrasCa);
			}else{
				// fazer o tratamento de indisponivel no controller
				$this->Categoria_model->updateOneCategoria($idCategoria, $arrayDadosUp);
				redirect('Categorias/buscarCategoria');
			}

			
		}
	}
?>