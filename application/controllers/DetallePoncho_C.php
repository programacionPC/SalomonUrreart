<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetallePoncho_C extends CI_Controller {
	
	public function __construct(){
		parent::__construct(); 
		
		$this->load->model('DetallePoncho_M');
	}

	public function index($ID_Poncho){
		//CONSULTA los detaales del poncho seleccionado
		$DetallePoncho = $this->DetallePoncho_M->consultarPoncho($ID_Poncho);

		$Datos = [
			'detallePoncho' => $DetallePoncho, //ID_Poncho, nombrePoncho, nombre_ImgPoncho
		];

		// echo '<pre>';
		// print_r($Datos);
		// echo '</pre>';
		// exit;

		$this->load->view('header/header_DetallesPonchos');
		$this->load->view('detallePoncho_V', $Datos);
	}
}