<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetallePintura_C extends CI_Controller {
	
	public function __construct(){
		parent::__construct(); 
		
		$this->load->model('DetallePintura_M');
	}

	//Invocado desde E_Pintura.js
	public function index($ID_Pintura){
		//CONSULTA los detalles de la pintura seleccionada
		$Detalle_Pintura = $this->DetallePintura_M->consultarPintura($ID_Pintura);
		
		//CONSULTA las imagenes miniatura del poncho seleccionado
		$MiniaturaPintura = $this->DetallePintura_M->consultarMiniaturaPintura($ID_Pintura);

		$Datos = [
			'detallePintura' => $Detalle_Pintura, //ID_Pintura, nombre_pintura, tecnica_pintura, medida_pintura, nombre_ImgPintura, disponible
			'imagenMiniatura' => $MiniaturaPintura // ID_Pintura, ID_ImagenMiniatura, nombre_ImagenMiniatura 
		];

		// echo '<pre>';
		// print_r($Datos);
		// echo '</pre>';
		// exit;

		$this->load->view('header/header_DetallesPonchos');
		$this->load->view('detallePintura_V', $Datos);
	}
	
// ********************************************************************************************************
	public function diapositivaPintura($ID_Pintura, $Recorrido){
		if($Recorrido == 'Retroceder'){
			// Se consulta el nombre de la imagen anterior que se va amostrar en detalle
			$DiapositivaPintura = $this->DetallePintura_M->consultarPinturaAnterior($ID_Pintura);
		}
		else if($Recorrido == 'Avanzar'){
			// Se consulta el nombre de la imagen posterior que se va amostrar en detalle
			$DiapositivaPintura = $this->DetallePintura_M->consultarPinturaPosterior($ID_Pintura);
		}
		
		// Se consultan las vistas miniaturas de la diapositiva,
		if(!empty($DiapositivaPintura['ID_Pintura'])){
			$MiniaturaPintura = $this->DetallePintura_M->consultarMiniaturaPintura($DiapositivaPintura['ID_Pintura']);
		}
		else{
			$MiniaturaPintura = '';
		}

		$Datos = [
			'diapositivaPintura' => $DiapositivaPintura, //ID_Pintura, nombre_pintura, medida_pintura, tecnica_pintura, nombre_ImgPintura, disponible
			'imagenMiniatura' => $MiniaturaPintura // ID_Pintura, ID_ImagenMiniatura, nombre_ImagenMiniatura 
		];				
			
		//Se evalua si la imagen llegua al extremo izquierdo o derecho, en este caso arrojará un array vacio
		if($DiapositivaPintura != Array()){
			$this->load->view('A_detallePintura_V', $Datos);			
		}
		else{ //Cuando el slider llega a un extremo
			//Se consulta cual es el ultimo ID_Pintura de la tabla "pinturas"
			$UltimoID_Pintura = $this->DetallePintura_M->consultarUltimoID_Pintura();

			//Se consulta cual es el primer ID_Pintura de la tabla "pinturas"
			$PrimerID_Pintura = $this->DetallePintura_M->consultarprimerID_Pintura();

			// Se consulta el nombre de la imagen que se va amostrar en detalle
			$DiapositivaPintura = $this->DetallePintura_M->consultarPintura($ID_Pintura);
						
			$Datos = [
				'diapositivaPintura' => $DiapositivaPintura, //ID_Pintura, nombrePintura, nombre_ImgPintura, disponible
			];

			if($UltimoID_Pintura['ID_Pintura'] == $Datos['diapositivaPintura']['ID_Pintura']){
				
				// Se consultan las vistas miniaturas de la diapositiva
				$MiniaturaPintura = $this->DetallePintura_M->consultarMiniaturaPintura($PrimerID_Pintura['ID_Pintura']);

				$Datos = [
					'diapositivaPintura' => $DiapositivaPintura, //ID_Pintura, nombrePintura, nombre_ImgPintura, disponible
					'imagenMiniatura' => $MiniaturaPintura, // ID_Pintura, ID_ImagenMiniatura, nombre_ImagenMiniatura 
					'primerID_Pintura' => $PrimerID_Pintura, //ID_Pintura, nombre_ImgPintura, disponible					
				];
			
				// echo '<pre style="color:white">';
				// print_r($Datos);
				// echo '<pre>';
				// exit;
				
				$this->load->view('A_detallePintura_V', $Datos);
			}
			else if($PrimerID_Pintura['ID_Pintura'] == $Datos['diapositivaPintura']['ID_Pintura']){
				
				// Se consultan las vistas miniaturas de la diapositiva
				$MiniaturaPintura = $this->DetallePintura_M->consultarMiniaturaPintura($UltimoID_Pintura['ID_Pintura']);

				$Datos = [
					'diapositivaPintura' => $DiapositivaPintura, //ID_Pintura, nombrePintura, nombre_ImgPintura, disponible 
					'imagenMiniatura' => $MiniaturaPintura, // ID_Pintura, ID_ImagenMiniatura, nombre_ImagenMiniatura
					'ultimoID_Pintura' => $UltimoID_Pintura, //ID_Pintura, nombre_ImgPintura, disponible				
				];
			
			
				// echo '<pre style="color:yellow">';
				// print_r($Datos);
				// echo '<pre>';
				// exit;

				$this->load->view('A_detallePintura_V', $Datos);
			}
		}
	}

	//Invocado en A_DetallesPintura.js
	public function VerMiniatura($ID_ImagenMiniatura){
		// Se consulta el nombre de la imagen miniatura que se va a mostrar
		$ImagenMiniatura = $this->DetallePintura_M->consultarImagenMiniatura($ID_ImagenMiniatura);
		
		$Datos = [
			'imagenMiniatura' => $ImagenMiniatura, //nombre_ImagenMiniatura
		];

		// echo '<pre style="color:white">';
		// print_r($Datos);
		// echo '</pre>';
		// exit;

		$this->load->view('A_vistaMiniatura_V', $Datos);
	}
}