<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetallePintura_C extends CI_Controller {
	
	public function __construct(){
		parent::__construct(); 
		
		$this->load->model('DetallePintura_M');
	}

	public function index($ID_Pintura){
		//CONSULTA los detalles de la pintura seleccionada
		$Detalle_Pintura = $this->DetallePintura_M->consultarPintura($ID_Pintura);

		$Datos = [
			'detallePintura' => $Detalle_Pintura, //ID_Pintura, nombre_pintura, tecnica_pintura, medida_pintura, nombre_ImgPintura
		];

		// echo '<pre>';
		// print_r($Datos);
		// echo '</pre>';
		// exit;

		$this->load->view('header/header_DetallesPonchos');
		$this->load->view('detallePintura_V', $Datos);
	}
	
// ********************************************************************************************************
	public function slider($ID_Pintura, $Recorrido){
		if($Recorrido == 'Retroceder'){
			// Se consulta el nombre de la imagen anterior que se va amostrar en detalle
			$SliderPintura = $this->DetallePintura_M->consultarPinturaAnterior($ID_Pintura);
		}
		else if($Recorrido == 'Avanzar'){
			// Se consulta el nombre de la imagen posterior que se va amostrar en detalle
			$SliderPintura = $this->DetallePintura_M->consultarPinturaPosterior($ID_Pintura);
		}

		// Se consulta el nombre de la imagen que se va amostrar en detalle
		// $SliderPintura = $this->DetallePintura_M->consultarPintura($ID_PinturaAnterior);

		$Datos = [
			'sliderPintura' => $SliderPintura, //ID_Pintura, nombre_pintura, medida_pintura, tecnica_pintura, nombre_ImgPintura
			// 'finslider' => false,
		];

		// echo '<pre style="color:white">';
		// print_r($SliderPintura);
		// echo '<pre>';
		// exit;
				
		//Cuando llegue a la imagen del extremo izquierdo o derecho arrojara un array vacio
		if($SliderPintura != Array()){
			$this->load->view('A_sliderPintura_V', $Datos);
		}
		else{ //Cuando el slider llega a un extremo
			//Se consulta cual es el ultimo ID_Pintura de la tabla "pinturas"
			$UltimoID_Pintura = $this->DetallePintura_M->consultarUltimoID_Pintura();
			
			//Se consulta cual es el primer ID_Pintura de la tabla "pinturas"
			$PrimerID_Pintura = $this->DetallePintura_M->consultarprimerID_Pintura();

			// Se consulta el nombre de la imagen que se va amostrar en detalle
			$SliderPintura = $this->DetallePintura_M->consultarPintura($ID_Pintura);

			$Datos = [
				'sliderPintura' => $SliderPintura, //ID_Pintura, nombrePintura, nombre_ImgPintura
				'ultimoID_Pintura' => $UltimoID_Pintura, //ID_Pintura
				'primerID_Pintura' => $PrimerID_Pintura, //ID_Pintura
			];
			
			// echo '<pre style="color:white">';
			// print_r($Datos);
			// echo '<pre>';
			// exit;

			if($Datos['ultimoID_Pintura']['ID_Pintura'] == $Datos['sliderPintura']['ID_Pintura']){
			
				// echo '<pre style="color:white">';
				// print_r($Datos);
				// echo '<pre>';
				// exit;
				
				$this->load->view('A_sliderPintura_V', $Datos);
			}
			else if($Datos['primerID_Pintura']['ID_Pintura'] == $Datos['sliderPintura']['ID_Pintura']){
				array_push($Datos, 'primero');
			
				// echo '<pre style="color:yellow">';
				// print_r($Datos);
				// echo '<pre>';
				// exit;

				$this->load->view('A_sliderPintura_V', $Datos);
			}
		}
	}
}