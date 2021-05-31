<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalomonPanel_C extends CI_Controller {

	public function index(){
		$this->load->view('header/header_SoloEstilos');
		$this->load->view('panel_V');
	}

	public function recibeColecciones(){
	}
}
