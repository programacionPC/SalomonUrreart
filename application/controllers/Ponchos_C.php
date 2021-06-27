<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ponchos_C extends CI_Controller {
	
	public function __construct(){
		parent::__construct(); 
		
		$this->load->model('Ponchos_M');
	}

	public function index(){
		//CONSULTA las ponchos en BD
		$PonchosSalomon = $this->Ponchos_M->consultarPonchosSalomon();
        
		$Datos = [
			'ponchos' => $PonchosSalomon //ID_Poncho, nombrePoncho, nombre_ImgPoncho
		];

		// echo '<pre>';
		// print_r($Datos);
		// echo '</pre>';
		// exit;

		$this->load->view('header/header_pinturas');
		$this->load->view('ponchos_V', $Datos);
		$this->load->view('footer/footer');
	}
}