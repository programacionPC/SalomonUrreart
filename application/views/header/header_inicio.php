<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php //echo NOMBRESITIO;?></title>

		<meta http-equiv="content-type"  content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/EstilosPort_Art.css?v=<?php echo rand();?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/MQ_EstilosPort_Art_800.css?v=<?php echo rand();?>"/>
		
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=RLato|Raleway:400|Montserrat|Gruppo'>
        
		<!-- CDN iconos de font-awesome-->
		<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css'/>
    </head>
    <body>
		<header class="header" id="Header">   
			<!-- icono para responsive -->
			<div>
				<label class="header--menu"><span id="Span_6"><i class="fas fa-bars" id="Icono_3"></i></span></label>

				<!-- Barra de navegación -->
				<nav id="MenuResponsive" class="header__menuResponsive" >						
					<ul id="MenuContenedor">
						<li><a class="header__li--Enlaces" href="#Seccion_1">Inicio</a></li>
						<li class="menuLi_1"><a class="header__li--Enlaces MostrarSubMenu_JS">Colecciones</a>
							<ul class="menuContenedor_3" id="MenuContenedor_3">
								<li><a class="header__li--Enlaces enlace_JS" href="Pinturas_C/fauna">Alma silvestre</a></li>
							</ul> 	
						</li>
						<li><a class="header__li--Enlaces" href="Ponchos_C">Ponchos</a></li>
						<li><a class="header__li--Enlaces" href="#Seccion_2">Ultimas obras</a></li>
						<li><a class="header__li--Enlaces" href="#Seccion_5">Sobre el artista</a></li>
						<li><a class="header__li--Enlaces" href="#">Fotografos</a></li>
						<li><a class="header__li--Enlaces" href="#Seccion_7">Contacto</a></li>
					</ul>		
				</nav>
			</div>

			<a href="<?php echo base_url();?>Inicio_C"><img class="header__logo" src="<?php echo base_url();?>assets/images/logo-Salomon.png"/></a>
			
			<!-- ICONO CARRITO DE COMPRAS -->
			<a href="<?php echo base_url();?>Inicio_C"><i class="fas fa-cart-arrow-down header--car"></i></a>
        </header>
		
		<!--div utilizado para tapar el body mientras esta el menu responsive -->
		<div class="tapa" id="Tapa"></div>
		
   <!-- No se cierrra la etiqueta <body> porque se cierra es el footer -->