<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito_C extends CI_Controller {
	
	public function __construct(){
		parent::__construct(); 
		
		// $this->load->model('Carrito_M');
	}

	//Invocada al hacer click sobre el icono de carrito de compras
	public function index(){
		
		if(!isset($Datos)){
			echo "El carrito esta vacio;";
		}
		else{
			$this->load->view('carrito_V', $Datos);
		}
	}

	//Invocado desde A_DetallePintura.js
	public function carrito_pinturas($NombreImgPintura, $NombrePintura, $TecnicaPintura, $MedidaPintura){

		//Las variables se reciben desde Ajax, y los espacios en blancos que contengan fueron reemlazados por %20, con la funcion removerCaracteres se reemlazo por espacios en blanoc
		function removerCaracteres($url) {
			// Tranformamos todo a minusculas
			$url = strtolower($url);
			//Rememplazamos caracteres especiales latinos
			$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 20);
			$repl = array('a', 'e', 'i', 'o', 'u', 'n', ' ');
			$url = str_replace ($find, $repl, $url);
			// Añadimos los guiones
			$find = array(' ', '&', '\r\n', '\n', '+'); 
			$url = str_replace ($find, '-', $url);
			// Eliminamos y Reemplazamos demás caracteres especiales
			$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
			$repl = array('', '-', '');
			$url = preg_replace ($find, $repl, $url);
			return $url;
		}
		//Imprime titulo-de-prueba-url-amigable
		$NombrePintura=  removerCaracteres($NombrePintura);
		$TecnicaPintura=  removerCaracteres($TecnicaPintura);
		$MedidaPintura=  removerCaracteres($MedidaPintura);

		str_replace("-"," ",$NombrePintura);

		$Datos = [
			'nombre_ImgPintura' => $NombreImgPintura,
			'nombre_Pintura' => str_replace("-"," ",$NombrePintura),
			'tecnica_Pintura' => str_replace("-"," ",$TecnicaPintura),
			'medida_Pintura' => str_replace("-"," ",$MedidaPintura)
		];

		// echo '<pre style="color: white">';
		// print_r($Datos);
		// echo '</pre>';
		// exit;

		$this->load->view('A_carrito_V', $Datos);
	}
}