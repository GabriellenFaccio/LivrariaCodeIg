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
			// verificar se tem algum livro nessa categoria, se nao apagar
			$arrayBanco['livrosNaCatExcluira'] = $this->Livro_model->getLivrosNaCat($idCategoria);

			if ($arrayBanco['livrosNaCatExcluira'] == NULL) {
				$this->Categoria_model->deleteOneCategoria($idCategoria);
				echo "Excluiu?";
				die;
			}else{
				$arrayBanco['allCatMenosUma'] = $this->Categoria_model->getAllMenosCatExcluira($idCategoria);
				$arrayBanco['idCategoria'] = $idCategoria;
				$this->load->view('paginas_livraria/desejaExcluir', $arrayBanco);
				//$this->Livro_model->updateLivrosNovaCat($arrayBanco);
			}
		}

		public function excluirCategoria($idCategoria){
			$newCategoria = $this->input->post('newCategoria');

			$arrayBanco['livrosCategoriaAnt'] = $this->Livro_model->getCategoriaLiv($idCategoria);

			foreach ($arrayBanco['livrosCategoriaAnt'] as $key => $value){
				$arrayBanco['livrosCategoriaAnt'][$key]->cat_id = $newCategoria;
			}
			$this->Livro_model->updateLivrosNovaCat($newCategoria, $idCategoria);
			$this->Categoria_model->deleteOneCategoria($idCategoria);
		
			redirect('Categorias/buscarCategoria');
		}

		public function salvarUpdateCat($idCategoria){
			$arrayDadosUp['cat_nome'] 			  = $this->input->post('cat_nome');
			$arrayDadosUp['cat_status']		      = $this->input->post('cat_status');
			$arrayDadosUp['cat_descricao'] 		  = $this->input->post('cat_descricao');
			$arrayDadosUp['cat_data_modificacao'] = date('Y/m/d H:i:s');

			if ($arrayDadosUp['cat_status'] == 0) {
				// Preciso fazer os livros receberem o status indisponivel
				$arrayLivrosComCat = $this->Livro_model->getLivrosNaCat($idCategoria);
				$this->Livro_model->livrosIndisponiveis($arrayLivrosComCat, $idCategoria);
				redirect('Categorias/buscarCategoria');
			}else{
				// fazer o tratamento de indisponivel no controller
				$this->Categoria_model->updateOneCategoria($idCategoria, $arrayDadosUp);
				redirect('Categorias/buscarCategoria');
			}
		}
	}
?>