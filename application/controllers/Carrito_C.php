<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito_C extends CI_Controller {
	
	public function __construct(){
		parent::__construct(); 
		
		// $this->load->model('Carrito_M');
	}

	public function index(){
		
		if(!isset($Datos)){
			echo "El carrito esta vacio;";
		}
		else{
			$this->load->view('carrito_V', $Datos);
		}
	}

	public function carrito_pinturas($NombreImgPintura, $NombrePintura, $TecnicaPintura, $MedidaPintura){
		$Datos = [
			'nombre_ImgPintura' => $NombreImgPintura,
			'nombre_Pintura' => $NombrePintura,
			'tecnica_Pintura' => $TecnicaPintura,
			'medida_Pintura' => $MedidaPintura
		];

		// echo '<pre>';
		// print_r($Datos);
		// echo '</pre>';
		// exit;

		$this->load->view('A_carrito_V', $Datos);
	}
}