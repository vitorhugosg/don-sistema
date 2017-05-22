<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//definindo variável que manda informações para o front end.
		$data = array();
		$data['tituloPagina'] = "Dashboard D/ON";
		$data['subTituloPagina'] = "Área do Cliente";
		//pegando session NIVEL
		$data['nivel'] =  $this->session->userdata('nivel');
		var_dump($this->session->userdata('nivel'));exit;



		$this->template->load('commons/template-dashboard', 'cliente/index', $data);
	}

	


}