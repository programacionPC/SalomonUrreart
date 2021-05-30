<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_C extends CI_Controller {

	public function index(){
		$this->load->view('header/header_inicio');
		$this->load->view('inicio_V');
		// $this->load->view('construccion_V');
	}
}
