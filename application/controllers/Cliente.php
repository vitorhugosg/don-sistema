<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
	
	public function __construct(){

		parent::__construct();
	}

	public function index(){

		//pegando a sessão do loggin;
		$usuario = $_SESSION['usuario'];
		//verificando se está logado
		is_logged($usuario);
		//definindo variável que manda informações para o front end.
		$data = array();
		$data['tituloPagina'] = "D/ON";
		$data['subTituloPagina'] = "Home - Cliente";
		$data['usuario'] = $usuario;

		






		$this->template->load('commons/template-dashboard', 'cliente/index', $data);
	}

	public function novacampanha(){
		//pegando a sessão do loggin;
		$usuario = $_SESSION['usuario'];
		//verificando se está logado
		is_logged($usuario);
		//definindo variável que manda informações para o front end.
		$data = array();
		$data['tituloPagina'] = "D/ON";
		$data['subTituloPagina'] = "Campanhas - Nova Campanha";
		$data['usuario'] = $usuario;








		$this->template->load('commons/template-dashboard', 'cliente/campanhas/nova-campanha', $data);
	}

	

	public function logout(){
		unset($_SESSION['usuario']);

		redirect(base_url('login/'));
	}
}