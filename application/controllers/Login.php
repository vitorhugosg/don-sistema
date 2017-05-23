<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){

		parent::__construct();
		
	}

	public function index(){
		//inicializando variaveis
		$alerta = null;

		if ($this->input->post('entrar') == 'entrar') {
			//segurança no captcha
			if ($this->input->post('captcha')) redirect('conta/entrar');

			//utilizando form-validation
			//primeiro parametro e o name do input
			//segundo o que vai aparecer
			//terceiro -> regras que esse valor tem que conter
			$this->form_validation->set_rules('email','EMAIL','required|valid_email');
			$this->form_validation->set_rules('senha','SENHA','required|min_length[6]|max_length[20]'); 
			//rodando form validation

			if ($this->form_validation->run() === TRUE) {
				//PARTIR PARA QUANDO FORMULÁRIO FOI VALIDADE
				//carregando model usuarios
				$this->load->model("Usuarios_model");

				$email = $this->input->post('email');

				$senha = $this->input->post('senha');
				//chamando função que vai fazer loggin
				$login_exists = $this->Usuarios_model->check_login($email,$senha);
				if ($login_exists) {
					//loggin autorizado
					//destinguindo login usuario e clinte
					if($login_exists['nivel'] == '0'){
						$usuario = $login_exists;

						//CRIANDO SESSÃO - configura os dados da sessão
						$login = array(
							'created'  => $usuario['created'],
							'email'     => $usuario['email'],
							'logado' => TRUE,
							'nivelUsuario' => $login_exists['nivel']
							);

						$this->session->set_userdata($login);

						//enviar para login restrito

						redirect(base_url('cliente/'));
					}else if($login_exists['nivel'] == '1'){
						$usuario = $login_exists;

						//CRIANDO SESSÃO - configura os dados da sessão
						$login = array(
							'created'  => $usuario['created'],
							'email'     => $usuario['email'],
							'logado' => TRUE,
							'nivelUsuario' => $login_exists['nivel']
							);

						$this->session->set_userdata($login);

						//enviar para login restrito

						redirect(base_url('agencia/'));
					}
					

				}else{
					$alerta = array(
						"class" => "danger",
						"mensagem" => "Atenção, Login inválido, senha ou email incorretos"
						);
				}
			}else{
				//tratando errors do form validation
				$alerta = array(
					"class" => "danger",
					"mensagem" => "Atenção! Falha na validação do formulário!<br>" . validation_errors()
					);
			}


		}

		//enviado conteúdo para a view
		$dados = array(
			"alerta" => $alerta
			);
		

		$this->template->load('commons/template-login', 'login/login');
	}

	public function cadastrar(){
		$this->template->load('commons/template-login', 'login/cadastrar');
	}

	


}
