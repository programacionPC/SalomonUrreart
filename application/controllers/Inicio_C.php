<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_C extends CI_Controller {
	
	public function __construct(){
		parent::__construct(); 
		
		$this->load->model('Inicio_M');
	}

	public function index(){
		//CONSULTA las coleciones del sitio web
		$ColeccionesSalomon = $this->Inicio_M->consultarColeccionSalomon();
		
		//CONSULTA lAS ULTIMAS OBRAS
		$UltimasObrasSalomon = $this->Inicio_M->consultarUltimasObrasSalomon();

		//CONSULTA el perfil de Salomon
		$PerfilSalomon = $this->Inicio_M->consultarPerfilSalomon();

		$Datos = [
			'perfilArtista' => $PerfilSalomon, //perfil, nombre_Fotografia
			'coleccionArtista' => $ColeccionesSalomon, //ID_Coleccion, nombre_coleccion
			'UltimasObras' => $UltimasObrasSalomon, // ID_Poncho, nombrePoncho, nombre_ImgPoncho
		];

		// echo '<pre>';
		// print_r($Datos);
		// echo '</pre>';
		// exit;

		$this->load->view('header/header_inicio');
		$this->load->view('inicio_V', $Datos);
		$this->load->view('footer/footer');
	}

	public function SUA_panel(){
		$this->load->view('header/header_inicio');
		$this->load->view('panel_V');
	}
}