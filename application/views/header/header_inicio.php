<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php //echo NOMBRESITIO;?></title>

		<meta http-equiv="content-type"  content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/EstilosPort_Art.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/MediaQuery_EstilosPort_Art_800.css"/>
		
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=RLato|Raleway:400|Montserrat|Indie+Flower|Caveat'>
        
		<!-- CDN iconos de font-awesome-->
		<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css'/>
    </head>
    <body>
		<header class="header" id="Header">   
			<!-- icono para responsive -->
			<label id="ComandoMenu" class="header--menu"><span id="Span_6"><i class="fas fa-bars icono_3" id= "Icono_3"></i></span></label>

			<!-- Barra de navegación -->
			<nav id="MenuResponsive" class="header__menuResponsive">						
				<ul id="MenuContenedor">
					<li><a class="header__a li--Enlaces" href="#Seccion_1">Inicio</a></li>
					<li><a class="header__a li--Enlaces" href="#Seccion_2">Galería</a>
					<li><a class="header__a li--Enlaces" href="#Seccion_3">Videos</a></li>
					<li><a class="header__a li--Enlaces" href="#Seccion_4">Sobre mi</a></li>
					<li><a class="header__a li--Enlaces" href="#Seccion_5">Tienda</a></li>
				</ul>		
			</nav>
        </header>
		
		<!--div utilizado para tapar el body mientras esta el menu responsive -->
		<div class="tapa" id="Tapa"></div>
		
   <!-- No se cierrra la etiqueta <body> porque se cierra es el footer -->