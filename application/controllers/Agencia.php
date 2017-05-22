<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agencia extends CI_Controller {
	
	public function __construct(){

		parent::__construct();
	}

	public function index(){
	
		$this->template->load('commons/template-dashboard', 'agencia/index');
	}

	


}