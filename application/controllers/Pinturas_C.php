<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinturas_C extends CI_Controller {
	
	public function __construct(){
		parent::__construct(); 
		
		$this->load->model('Pinturas_M');
	}

	public function index(){
		//CONSULTA los detalles del poncho seleccionado
		// $DetallePoncho = $this->DetallePoncho_M->consultarPoncho($ID_Poncho);

		// $Datos = [
		// 	'detallePoncho' => $DetallePoncho, //ID_Poncho, nombrePoncho, nombre_ImgPoncho
		// ];

		// // echo '<pre>';
		// // print_r($Datos);
		// // echo '</pre>';
		// // exit;

		// $this->load->view('header/header_DetallesPonchos');
		// $this->load->view('detallePoncho_V', $Datos);
	}

	public function fauna(){
		//CONSULTA las pinturas
		$PinturasSalomon = $this->Pinturas_M->consultarPinturasSalomon();
        
		$Datos = [
			'pinturas' => $PinturasSalomon //ID_Pintura, nombre_pintura, nombre_ImgPintura
		];

		$this->load->view('header/header_pinturas');
		$this->load->view('pinturas_V', $Datos);
	}
}