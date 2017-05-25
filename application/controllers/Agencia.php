<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agencia extends CI_Controller {
	
	public function __construct(){

		parent::__construct();
	}

	public function index(){
		$usuario = $_SESSION['usuario'];
		//verificando se está logado
		is_logged($usuario);
		//definindo variável que manda informações para o front end.
		$data = array();
		$data['tituloPagina'] = "D/ON";
		$data['subTituloPagina'] = "Home - Agência";
		$data['usuario'] = $usuario;
		$this->template->load('commons/template-dashboard', 'agencia/index', $data);
	}
	public function ncperguntas(){
		$usuario = $_SESSION['usuario'];
		//verificando se está logado
		is_logged($usuario);
		//definindo variável que manda informações para o front end.

		//https://pastebin.com/0rTrs6vj
		$data = array();
		$data['tituloPagina'] = "D/ON";
		$data['subTituloPagina'] = "Home - Agência";
		$data['usuario'] = $usuario;
		$this->template->load('commons/template-dashboard', 'agencia/ncperguntas', $data);
	}

	public function logout(){
		unset($_SESSION['usuario']);

		redirect(base_url('login/'));
	}

	public function do_upload(){

	    $config['upload_path']          = './uploads/'; // chmod 0777
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['max_size']             = 100;
	    $config['max_width']            = 1024;
	    $config['max_height']           = 768;

	    $this->load->library('upload');
	    $this->upload->initialize($config);

	    // O name do seu input file deve ser userfile ...
	    if ($this->upload->do_upload()){
	    	// Dados da imagem e mensagem de sucesso ...
	    	$data = array('upload_data' => $this->upload->data());
	    	$this->load->view('upload_success', $data);
	    }
	    else
	    {
	    	// Descreve o erro ao tentar subir a imagem ...
	    	$error = array('error' => $this->upload->display_errors());
	    	$this->load->view('upload_form', $error);
	    }
	}


}



