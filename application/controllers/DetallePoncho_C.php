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

	//Este funcion hace el cambio de imagenes por medio de las flechas, ()no es el slider del poncho
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
		else{ //Cuando el slider llega a un extremo
			//Se consulta cual es el ultimo ID_Poncho de la tabla "ponchos"
			$UltimoID_Poncho = $this->DetallePoncho_M->consultarUltimoID_Poncho();
			
			//Se consulta cual es el primer ID_Poncho de la tabla "ponchos"
			$PrimerID_Poncho = $this->DetallePoncho_M->consultarprimerID_Poncho();

			// Se consulta el nombre de la imagen que se va amostrar en detalle
			$SliderPoncho = $this->DetallePoncho_M->consultarPoncho($ID_Poncho);

			$Datos = [
				'sliderPoncho' => $SliderPoncho, //ID_Poncho, nombrePoncho, nombre_ImgPoncho
				'ultimoID_Poncho' => $UltimoID_Poncho, //ID_Poncho
				'primerID_Poncho' => $PrimerID_Poncho, //ID_Poncho
			];
			// echo $Datos['ultimoID_Poncho']['ID_Poncho']; 
			// echo '<br>';
			// echo $Datos['sliderPoncho']['ID_Poncho'];
			if($Datos['ultimoID_Poncho']['ID_Poncho'] == $Datos['sliderPoncho']['ID_Poncho']){
			
				// echo '<pre style="color:white">';
				// print_r($Datos);
				// echo '<pre>';
				// exit;
				
				$this->load->view('A_sliderPoncho_V', $Datos);
			}
			else if($Datos['primerID_Poncho']['ID_Poncho'] == $Datos['sliderPoncho']['ID_Poncho']){
				array_push($Datos, 'primero');
			
				// echo '<pre style="color:white">';
				// print_r($Datos);
				// echo '<pre>';
				// exit;

				$this->load->view('A_sliderPoncho_V', $Datos);

			}
		}
	}
}