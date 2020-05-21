<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		parent::__construct();
		$this->load->model('Livro_model');
		$this->load->model('Categoria_model');
		$this->load->helper('url');

		$arrayBanco['dadosLivCat'] = $this->Livro_model->getAllLivrosCat();
		$arrayBanco['dadosCat'] = $this->Categoria_model->getAllCat();

		$this->load->view('paginas_livraria/home',$arrayBanco);
	}
}
