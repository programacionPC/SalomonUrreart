<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalomonPanel_C extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
		
		$this->load->model('SalomonPanel_M');
	}

	public function index(){ 
		//CONSULTA las coleciones del sitio web
		$ColeccionesSalomon = $this->SalomonPanel_M->consultarcolecciones();
		// echo '<pre>';
		// print_r($ColeccionesSalomon);
		// echo '</pre>';
		// exit;

		//CONSULTA las pinuras del sitio web
		$PinturasSalomon = $this->SalomonPanel_M->consultarpinturas();
		// echo '<pre>';
		// print_r($PinturasSalomon);
		// echo '</pre>';
		// exit;

		//CONSULTA los ponchos del sitio web
		$PonchosSalomon = $this->SalomonPanel_M->consultarponchos();
		// echo '<pre>';
		// print_r($PonchosSalomon);
		// echo '</pre>';
		// exit;

		//CONSULTA el perfil de Salomon
		$PerfilSalomon = $this->SalomonPanel_M->consultarPerfilSalomon();
		// echo '<pre>';
		// print_r($PerfilSalomon);
		// echo '</pre>';
		// exit;

		$Datos = [
			'datosArtista' => $PerfilSalomon, //ID_Coleccion, nombre_coleccion
			'coleccionArtista' => $ColeccionesSalomon, //d
			'datosPoncho' => $PonchosSalomon, //ID_Poncho, nombrePoncho, nombre_ImgPoncho
			'datosPintura' => $PinturasSalomon //ID_Pintura, nombre_pintura, medida_pintura, tecnica_pintura, nombre_ImgPintura
		];
	
		$this->load->view('header/header_SoloEstilos');
		$this->load->view('salomonpanel_V', $Datos);

        // public function estudioAmpliado($Data){
        //     $Certificado['certificado'] = $Data; 
        //     $this->load->view('zoom_V', $Certificado);
        // }
	}

	public function recibeColecciones(){
		//Recibe las colecciones por nombre (son las nuevas creadas)
		if(!empty($_POST['coleccion'])){
			foreach($_POST['coleccion'] as $Coleccion){
				$Coleccion = $_POST['coleccion'];
			}
			//El array trae elemenos duplicados, se eliminan los duplicado
			$ColeccionesRecibidas = array_unique($Coleccion);
		}
		else{
			echo "Ingrese al menos una coleccion";
			echo "<br>";
			echo "<a href='javascript:history.back()'>Regresar</a>";
			exit();
		}
		// echo "colecciones recibidas";
		// echo "<pre>";
		// print_r($Coleccion);
		// echo "</pre>";
		// exit;

		//Se CONSULTA las colecciones existenete en BD
		$ColeccionesExistentes = $this->SalomonPanel_M->consultarcolecciones();
		
		$ColeccionTotal = [];
		foreach($ColeccionesExistentes as $Existentes){
			$Existente = $Existentes['nombre_coleccion'];
			array_push($ColeccionTotal, $Existente);
		}
		// echo "colecciones existentes";
		// echo "<pre>";
		// print_r($ColeccionTotal);
		// echo "</pre>";
		// exit;
		
		$Colecciones = array_diff($ColeccionesRecibidas, $ColeccionTotal);
		// echo "colecciones a insertar";
		// echo "<pre>";
		// print_r($Colecciones);
		// echo "</pre>";
		// exit();
		
		//Se INSERTAN las colecciones
		$this->SalomonPanel_M->insertarColecciones($Colecciones); 
		
		redirect('SalomonPanel_C');
	}

	public function recibePintura(){
		if($_FILES['imagen_Pintura']["name"][0] != ""){
			$Nombre_Pintura = $_POST['nombre_Pintura'];		
			$Medidas_Pintura = $_POST['medidas_Pintura'];	
			$Tecnica_Pintura = $_POST['tecnica_Pintura'];	
			$nombre_ImgPintura = $_FILES['imagen_Pintura']['name'];
			$tipo_ImgPintura = $_FILES['imagen_Pintura']['type'];
			$tamanio_ImgPintura = $_FILES['imagen_Pintura']['size'];

			// echo "Pintura: " . $Nombre_Pintura . '<br>';
			// echo "Medidas Pintura: " . $Medidas_Pintura . '<br>';
			// echo "Tecnica Pintura: " . $Tecnica_Pintura . '<br>';
			// echo "nombre ImgPintura: " .  $nombre_ImgPintura . '<br>';
			// echo "tipo_ImgPintura: " .  $tipo_ImgPintura . '<br>';
			// echo "tamanio_ImgPintura: " .  $tamanio_ImgPintura . '<br>';
			// exit;
			
			//Si existe imagen_Pintura y tiene un tamaño correcto se procede a recibirla y guardar en BD
			if($Nombre_Pintura != ""){
				//Usar en remoto
				// $Directorio = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/pinturas/';
				
				// usar en local
				$Directorio = $_SERVER['DOCUMENT_ROOT'] . '/proyectos/PortafolioArtista_CI/assets/images/pinturas/';
				
				//Se mueve la imagen desde el directorio temporal a nuestra ruta indicada anteriormente utilizando la función move_uploaded_files
				move_uploaded_file($_FILES['imagen_Pintura']['tmp_name'], $Directorio.$nombre_ImgPintura);

				//Se INSERTA los datos del poncho en BD
				$this->SalomonPanel_M->insertarPintura($Nombre_Pintura, $Medidas_Pintura, $Tecnica_Pintura, $nombre_ImgPintura, $tipo_ImgPintura, $tamanio_ImgPintura);
			}
		}

		redirect('SalomonPanel_C');
	}
	
	public function recibePoncho(){
		if($_FILES['imagen_Poncho']["name"][0] != ""){
			$Nombre_Poncho = $_POST['nombre_Poncho'];		
			$Medidas_Poncho = $_POST['medidas_Poncho'];	
			$Tecnica_Poncho = $_POST['tecnica_Poncho'];	
			$nombre_ImgPoncho = $_FILES['imagen_Poncho']['name'];
			$tipo_ImgPoncho = $_FILES['imagen_Poncho']['type'];
			$tamanio_ImgPoncho = $_FILES['imagen_Poncho']['size'];

			// echo "Nombre Poncho: " . $Nombre_Poncho . '<br>';
			// echo "Medidas Poncho: " . $Medidas_Poncho . '<br>';
			// echo "Tecnica sPoncho: " . $Tecnica_Poncho . '<br>';
			// echo "nombre_ImgPoncho: " .  $nombre_ImgPoncho . '<br>';
			// echo "tipo_ImgPoncho: " .  $tipo_ImgPoncho . '<br>';
			// echo "tamanio_ImgPoncho: " .  $tamanio_ImgPoncho . '<br>';
			// exit;
			
			//Si existe imagen_Poncho y tiene un tamaño correcto se procede a recibirla y guardar en BD
			if($Nombre_Poncho != ""){
				//Usar en remoto
				// $Directorio = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/ponchos/';
				
				// usar en local
				$Directorio = $_SERVER['DOCUMENT_ROOT'] . '/proyectos/PortafolioArtista_CI/assets/images/ponchos/';
				
				//Se mueve la imagen desde el directorio temporal a nuestra ruta indicada anteriormente utilizando la función move_uploaded_files
				move_uploaded_file($_FILES['imagen_Poncho']['tmp_name'], $Directorio.$nombre_ImgPoncho);

				//Se INSERTA los datos del poncho en BD
				$this->SalomonPanel_M->insertarPoncho($Nombre_Poncho, $Medidas_Poncho, $Tecnica_Poncho, $nombre_ImgPoncho, $tipo_ImgPoncho, $tamanio_ImgPoncho);
			}
		}

		redirect('SalomonPanel_C');
	}

	public function recibeSobreMi(){
		$Perfil = $_POST['perfil'];		
		$nombre_Fotografia = $_FILES['imagen_Perfil']['name'];
		$tipo_Fotografia = $_FILES['imagen_Perfil']['type'];
		$tamanio_Fotografia = $_FILES['imagen_Perfil']['size'];

		// echo "Perfil: " . $Perfil . '<br>';
		// echo "nombre_Fotografia: " .  $nombre_Fotografia . '<br>';
		// echo "tipo_Fotografia: " .  $tipo_Fotografia . '<br>';
		// echo "tamanio_Fotografia: " .  $tamanio_Fotografia . '<br>';
		// exit;

		//Se INSERTA los datos del perfil en BD
		$this->SalomonPanel_M->actualizarPerfil($Perfil);
		
		//Si existe foto_Producto y tiene un tamaño correcto se procede a recibirla y guardar en BD
		if($nombre_Fotografia != ""){
			//Usar en remoto
			// $Directorio = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/';
			
			// usar en local
			$Directorio = $_SERVER['DOCUMENT_ROOT'] . '/proyectos/PortafolioArtista_CI/assets/images/';
			
			//Se mueve la imagen desde el directorio temporal a nuestra ruta indicada anteriormente utilizando la función move_uploaded_files
			move_uploaded_file($_FILES['imagen_Perfil']['tmp_name'], $Directorio.$nombre_Fotografia);

			//Se INSERTA la fotografia del perfil en BD
			$this->SalomonPanel_M->actualizarFotografia($nombre_Fotografia, $tipo_Fotografia, $tamanio_Fotografia);
		}

		redirect('SalomonPanel_C');
	}


	public function PaginaInicio(){
		require_once(APPPATH . 'controllers/Inicio_C.php');

		$this->VolverInicio = new Inicio_C();
		$this->VolverInicio->Index();
	}

	public function eliminarColeccion($ID_Coleccion){
		//Se ELIMINA la coleccion en BD
		$this->SalomonPanel_M->eliminarColeccion($ID_Coleccion);

		redirect('');
	}

	public function eliminarPintura($ID_Pintura){
		//Se ELIMINA el poncho en BD
		$this->SalomonPanel_M->eliminar_Pintura($ID_Pintura);

		redirect('SalomonPanel_C');
	}

	public function eliminarPoncho($ID_Poncho){
		//Se ELIMINA el poncho en BD
		$this->SalomonPanel_M->eliminar_Poncho($ID_Poncho);

		redirect('SalomonPanel_C');
	}

	public function ActualizarPoncho($ID_Poncho){
		if($_FILES['imagen_Poncho']["name"][0] != ""){
			$Poncho = $_POST['nombre_Poncho'];		
			$nombre_ImgPoncho = $_FILES['imagen_Poncho']['name'];
			$tipo_ImgPoncho = $_FILES['imagen_Poncho']['type'];
			$tamanio_ImgPoncho = $_FILES['imagen_Poncho']['size'];

			// echo "Poncho: " . $Poncho . '<br>';
			// echo "nombre_ImgPoncho: " .  $nombre_ImgPoncho . '<br>';
			// echo "tipo_ImgPoncho: " .  $tipo_ImgPoncho . '<br>';
			// echo "tamanio_ImgPoncho: " .  $tamanio_ImgPoncho . '<br>';
			// exit;
			
			//Si existe foto_Producto y tiene un tamaño correcto se procede a recibirla y guardar en BD
			if($Poncho != ""){
				//Usar en remoto
				// $Directorio = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/ponchos/';
				
				// usar en local
				$Directorio = $_SERVER['DOCUMENT_ROOT'] . '/proyectos/PortafolioArtista_CI/assets/images/ponchos/';
				
				//Se mueve la imagen desde el directorio temporal a nuestra ruta indicada anteriormente utilizando la función move_uploaded_files
				move_uploaded_file($_FILES['imagen_Poncho']['tmp_name'], $Directorio.$nombre_ImgPoncho);

				//Se INSERTA los datos del poncho en BD
				$this->SalomonPanel_M->insertarPoncho($Poncho, $nombre_ImgPoncho, $tipo_ImgPoncho, $tamanio_ImgPoncho);
			}
		}
		
		//Se ACTUALIZA el poncho en BD
		$this->SalomonPanel_M->actualizar_Poncho($ID_Poncho);

		redirect('SalomonPanel_C');
	}

	public function recibeContacto(){
		$Nombre = $_POST['nombre'];		
		$Correo = $_POST['correo'];	
		$Ciudad = $_POST['ciudad'];		
		$Asunto = $_POST['asunto'];	

		// echo "Nombre: " . $Nombre . "<br>";
		// echo "Correo: " . $Correo . "<br>";
		// echo "Ciudad: " . $Ciudad . "<br>";
		// echo "Asunto: " . $Asunto . "<br>";

		$Datos = [
			'nombre' => $Nombre, 
		];
		
		$this->load->view('header/header_acuseRecibo');
		$this->load->view('acuseRecibo_V', $Datos);
	}
}
