<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinturas_C extends CI_Controller {
	
	public function __construct(){
		parent::__construct(); 
		
		$this->load->model('Pinturas_M');
	}

	// Metodo invocado desde E_Carrito.js
	public function index(){
		$this->fauna();
	}

	public function fauna(){
		//CONSULTA las coleciones del sitio web
		$ColeccionesSalomon = $this->Pinturas_M->consultarColeccionSalomon();

		//CONSULTA las pinturas
		$PinturasSalomon = $this->Pinturas_M->consultarPinturasSalomon();
        
		$Datos = [
			'pinturas' => $PinturasSalomon, //ID_Pintura, nombre_pintura, nombre_ImgPintura 
			'coleccionArtista' => $ColeccionesSalomon, //ID_Coleccion, nombre_coleccion
		];

		$this->load->view('header/header_inicio', $Datos);
		$this->load->view('pinturas_V', $Datos);
	}
}