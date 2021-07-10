<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php //echo NOMBRESITIO;?></title>

		<meta http-equiv="content-type"  content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/EstilosPort_Art.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/MQ_EstilosPort_Art_800.css"/>
		
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=RLato|Raleway:400|Montserrat|Gruppo'>
        
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
					<li><a class="header__a li--Enlaces" href="../#Seccion_1">Inicio</a></li>
					<!-- <li class="menuLi_1"><a class="header__a MostrarSubMenu_JS">Pinturas</a>
						<ul class="menuContenedor_3 ul--menu" id="MenuContenedor_3">
							<li><a class="menuLi_2 li--Enlaces enlace_JS" href="#Seccion_2">Fauna</a></li>
						</ul> 	
					</li> -->
					<li><a class="header__a li--Enlaces" href="../#Seccion_3">Ponchos</a></li>
					<!-- <li class="menuLi_1"><a class="header__a MostrarSubMenu_JS">Encargos</a>
						<ul class="menuContenedor_3 ul--menu" id="MenuContenedor_4">
							<li><a class="menuLi_2 li--Enlaces enlace_JS" href="#Seccion_4">Mascota</a></li>
							<li><a class="menuLi_2 li--Enlaces enlace_JS">Animal favorito</a></li>
						</ul> 	
					</li> -->
                    <li><a class="li--Enlaces" href="../#Seccion_5">Sobre el artista</a></li>
                    <!-- <li><a class="li--Enlaces" href="#Seccion_6">Tienda</a></li> -->
                    <li><a class="li--Enlaces" href="../#Seccion_7">Contacto</a></li>
				</ul>		
			</nav>
        </header>
		
		<!--div utilizado para tapar el body mientras esta el menu responsive -->
		<div class="tapa" id="Tapa"></div>
		
   <!-- No se cierrra la etiqueta <body> porque se cierra es el footer -->