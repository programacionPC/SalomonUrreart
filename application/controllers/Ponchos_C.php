<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ponchos_C extends CI_Controller {
	
	public function __construct(){
		parent::__construct(); 
		
		$this->load->model('Ponchos_M');
	}

	public function index(){
		//CONSULTA las coleciones del sitio web
		$ColeccionesSalomon = $this->Ponchos_M->consultarColeccionSalomon();

		//CONSULTA las ponchos en BD
		$PonchosSalomon = $this->Ponchos_M->consultarPonchosSalomon();
        
		$Datos = [
			'ponchos' => $PonchosSalomon, //ID_Poncho, nombrePoncho, nombre_ImgPoncho
			'coleccionArtista' => $ColeccionesSalomon, //ID_Coleccion, nombre_coleccion
		];

		// echo '<pre>';
		// print_r($Datos);
		// echo '</pre>';
		// exit;

		$this->load->view('header/header_inicio', $Datos);
		$this->load->view('ponchos_V', $Datos);
	}
}