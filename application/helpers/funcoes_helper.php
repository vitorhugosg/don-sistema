<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//função de verificar se está logado
if ( ! function_exists('is_logged')){

	function is_logged($usuario){
		if (isset($usuario) && !empty($usuario)) {
			return true;
		}else{
			return redirect(base_url('login/'));
		}
	}

	//verifica se é cliente ou se é da agência
	function urlDashUser($nivel){
		if($nivel == 0){
			return 'cliente/';
		}else if($nivel == 1){
			return 'agencia/';
		}

	}
}



