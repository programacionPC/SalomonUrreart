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

	public function slider($ID_Poncho, $Recorrido){
		if($Recorrido == 'Retroceder'){
			//Se resta una unidad al ID_Poncho para obtener la imagen anterior enla BD
			$ID_PonchoAnterior = $ID_Poncho - 1;
		}
		else if($Recorrido == 'Avanzar'){
			//Se resta una unidad al ID_Poncho para obtener la imagen anterior enla BD
			$ID_PonchoAnterior = $ID_Poncho + 1;
		}

		// Se consulta el nombre de la imagen que se va amostrar en detalle
		$SliderPoncho = $this->DetallePoncho_M->consultarPoncho($ID_PonchoAnterior);

		$Datos = [
			'sliderPoncho' => $SliderPoncho, //ID_Poncho, nombrePoncho, nombre_ImgPoncho
		];

		// echo '<pre style="color:white">';
		// print_r($SliderPoncho);
		// echo '<pre>';
		// exit;
		
		if($SliderPoncho != Array()){
			$this->load->view('A_sliderPoncho_V', $Datos);
		}
		else{			
			// Se consulta el nombre de la imagen que se va amostrar en detalle
			$SliderPoncho = $this->DetallePoncho_M->consultarPoncho($ID_Poncho);

			$Datos = [
				'sliderPoncho' => $SliderPoncho, //ID_Poncho, nombrePoncho, nombre_ImgPoncho
			];
			
			$this->load->view('A_sliderPoncho_V', $Datos);
		}
	}
}