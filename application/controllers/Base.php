<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
	private $fb;

	public function __construct(){

		parent::__construct();
		$this->fb = new Facebook\Facebook([
			'app_id' => '116481085586320',
			'app_secret' => '3295fa06925d975a239a120320de260e',
			'default_graph_version' => 'v2.9',
			'persistent_data_handler'=>'session'
			]);
	}
	public function index(){
		
		$helper = $this->fb->getRedirectLoginHelper();
		$permissions = ['email'];
		$loginUrl = $helper->getLoginUrl('http://localhost/ci/base/logado', $permissions);

		echo '<a href="' . htmlspecialchars($loginUrl) . '">Logar com Facebook!</a>';
		
		$this->template->load('commons/template', 'home');
	}

	public function logado(){
		
		
		
		$helper = $this->fb->getRedirectLoginHelper();
 		$_SESSION['FBRLH_state']=$_GET['state'];

		try {
			$accessToken = $helper->getAccessToken();
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
			echo 'Erro da Graph API: ' . $e->getMessage();
			exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
			echo 'Erro da Facebook SDK: ' . $e->getMessage();
			exit;
		}

		if (isset($accessToken)) {
			$this->session->set_userdata('facebook_access_token', (string) $accessToken);
			try {
				$response = $this->fb->get('/me?fields=id,name,email,picture', $accessToken);
			} catch(Facebook\Exceptions\FacebookResponseException $e) {
				echo 'Erro da Graph API: ' . $e->getMessage();
				exit;
			} catch(Facebook\Exceptions\FacebookSDKException $e) {
				echo 'Erro da Facebook SDK: ' . $e->getMessage();
				exit;
			}
		} elseif ($helper->getError()) {
			echo "Requisição negada para o usuário.";
			exit;
		}else{
			echo "Erro desconhecido.";
			exit;
		}

		$user = $response->getGraphUser();

		foreach ($user as $key => $value) {
			echo $key.": ".$value."
			";
		}

		echo "<br> <img src='" . $user['picture']['url'] . "'> ";

	}
}
