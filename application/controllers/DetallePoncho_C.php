<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetallePoncho_C extends CI_Controller {
	
	public function __construct(){
		parent::__construct(); 
		
		$this->load->model('DetallePoncho_M');
	}

	public function index($ID_Poncho){
		//CONSULTA los detalles del poncho seleccionado
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

	public function slider($ID_Poncho, $Recorrido){
		if($Recorrido == 'Retroceder'){
			// Se consulta el nombre de la imagen que se va amostrar en detalle
			$SliderPoncho = $this->DetallePoncho_M->consultarPonchoAnterior($ID_Poncho);
		}
		else if($Recorrido == 'Avanzar'){
			// Se consulta el nombre de la imagen que se va amostrar en detalle
			$SliderPoncho = $this->DetallePoncho_M->consultarPonchoPosterior($ID_Poncho);
		}

		// Se consulta el nombre de la imagen que se va amostrar en detalle
		// $SliderPoncho = $this->DetallePoncho_M->consultarPoncho($ID_PonchoAnterior);

		$Datos = [
			'sliderPoncho' => $SliderPoncho, //ID_Poncho, nombrePoncho, nombre_ImgPoncho
			'finslider' => false,
		];

		// echo '<pre style="color:white">';
		// print_r($SliderPoncho);
		// echo '<pre>';
		// exit;
		
		//Cuando llegue a la imagen del extremo izquierdo o derecho arrojara un array vacio
		if($SliderPoncho != Array()){
			$this->load->view('A_sliderPoncho_V', $Datos);
		}
		else{ //Cuando el slidr llega a un extremo
			// Se consulta el nombre de la imagen que se va amostrar en detalle
			$SliderPoncho = $this->DetallePoncho_M->consultarPoncho($ID_Poncho);

			$Datos = [
				'sliderPoncho' => $SliderPoncho, //ID_Poncho, nombrePoncho, nombre_ImgPoncho
				// 'finslider_Left' => true,
				// 'finslider_Right' => true,
			];
			
			$this->load->view('A_sliderPoncho_V', $Datos);
		}
	}
}