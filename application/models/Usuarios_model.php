<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	
	public function check_login($email, $senha){
		$this->db->from("usuarios");
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);
		//executando a query
		$usuarios = $this->db->get();
		//se encontrei alguma linha
		if ($usuarios->num_rows()) {
			//retornando usuario
			$usuario = $usuarios->result_array();
			
			return $usuario[0];
			
		}else{
			return false;
		}
	}

	


}
