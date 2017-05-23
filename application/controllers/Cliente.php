<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
	}

	public function index(){
		//definindo variável que manda informações para o front end.
		$data = array();
		$data['tituloPagina'] = "D/ON";
		$data['subTituloPagina'] = "Home - Cliente";
		$data['nivelUsuario'] = $this->session->userdata('email');




		$this->template->load('commons/template-dashboard', 'cliente/index', $data);
	}

	public function novacampanha(){
		//definindo variável que manda informações para o front end.
		$data = array();
		$data['tituloPagina'] = "D/ON";
		$data['subTituloPagina'] = "Campanhas - Nova Campanha";
		$data['nivelUsuario'] = $this->session->userdata('email');

		$this->template->load('commons/template-dashboard', 'cliente/campanhas/nova-campanha', $data);
	}

	


}