<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div>
<!-- PORTADA -->
	<div class="contenedor_1" id="Seccion_1">
		<div class="ContenedorTitulo">
			<div class="ContenedorTitulo_div1">
				<img class="imagen--portada" loading="lazy" src="<?php echo base_url();?>assets/images/Caballo.jpg"/>
			</div>
			<div class="ContenedorTitulo_div2">
				<h1 class="ContenedorTitulo--h1_1">Salomon UrreArt</h1> 
				<h2 class="ContenedorTitulo--h2_1">Pinto por y para la naturaleza</h2>
			</div>
            <div class="ContenedorTitulo_secciones">
                <ul class="ul--panel">
                    <li><a class="li--Enlaces" href="#Seccion_1">INICIO</a></li>
					<li class="menuLi_1"><a class="header__a MostrarSubMenu_JS">PINTURAS</a>
						<ul class="menuContenedor_3" id="MenuContenedor_3">
							<li><a class="menuLi_2 li--Enlaces enlace_JS" href="#Seccion_2">Fauna</a></li>
						</ul> 	
					</li>
                    <li><a class="li--Enlaces" href="#Seccion_3">PONCHOS</a></li>
					<!-- <li class="menuLi_1"><a class="header__a MostrarSubMenu_JS">ENCARGOS</a>
						<ul class="menuContenedor_3" id="MenuContenedor_3">
							<li><a class="menuLi_2 li--Enlaces enlace_JS" href="#Seccion_4">Mascota</a></li>
							<li><a class="menuLi_2 li--Enlaces enlace_JS" href="#">Animal favorito</a></li>
						</ul> 	
					</li> -->
                    <li><hr class="hr_1"></li>
                    <li><a class="li--Enlaces li--Enlaces--minusculas" href="#Seccion_5">Sobre el artista</a></li>
                    <!-- <li><a class="li--Enlaces li--Enlaces--minusculas" href="#Seccion_6">Tienda</a></li> -->
                    <li><a class="li--Enlaces li--Enlaces--minusculas" href="#Seccion_7">Contacto</a></li>
                </ul>
            </div>
		</div>
	</div>

	<!-- PINTURAS -->
	<div class="contenedor_3" id="Seccion_2"> 
		<div class="cont_galeria--principal">
			<div class="cont_galeria" id="Cont_galeria">
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="<?php echo '1'?>" src="<?php echo base_url();?>assets/images/DSC_9538-45.jpg"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="<?php echo '2'?>" src="<?php echo base_url();?>assets/images/Buho.jpg" alt="Buho"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="<?php echo '3'?>" src="<?php echo base_url();?>assets/images/Pajaro.jpg"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="Pavoreal" src="<?php echo base_url();?>assets/images/Pavoreal.jpg"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="Lapa" src="<?php echo base_url();?>assets/images/Lapa.jpg"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="Camaleon" src="<?php echo base_url();?>assets/images/Camaleon.png"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="Salomon_1" src="<?php echo base_url();?>assets/images/Salomon_1.jpg"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="Salomon_2" src="<?php echo base_url();?>assets/images/Salomon_2.jpg"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="Salomon_3" src="<?php echo base_url();?>assets/images/Salomon_3.jpg"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="Pavoreal" src="<?php echo base_url();?>assets/images/Pavoreal.jpg"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="DSC_9538-45_2" src="<?php echo base_url();?>assets/images/DSC_9538-45.jpg"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy"  id="Buho_2" src="<?php echo base_url();?>assets/images/Buho.jpg"/>
				</div>
				<div class="cont_Galeria--item">
					<img class="cont_Galeria--img imagen_2--JS" loading="lazy" id="Camaleon_2" src="<?php echo base_url();?>assets/images/Camaleon.png"/>
				</div>
			</div>
		</div>
	</div>

	<!-- PONCHOS -->
	<div class="contenedor_2a" id="Seccion_3">
		<div class="contenedor_2" id="Seccion_3a">
			<?php 
			foreach($Ponchos as $Row){
				$ID_Poncho = $Row['ID_Poncho']; 
				$Nombre_Poncho = $Row['nombrePoncho'];            
				$Nombre_ImgPoncho = $Row['nombre_ImgPoncho']  ?>
				<div class="contenedor_2__div Poncho_JS"">
					<img class="imagen_1" id="<?php echo $ID_Poncho?>" loading="lazy" src="<?php echo base_url() . "assets/images/ponchos/" . $Nombre_ImgPoncho;?>"/>
					<h1 class="h1_1"><?php echo $Nombre_Poncho;?></h1> 
				</div>
				<?php
			}   ?>
		</div>
		<div id="MuestraPonchoViaAjax" style="color: white;"></div>
	</div>
	
	<!-- ENCARGOS -->
	<!-- <div class="contenedor--encargos" id="Seccion_4">
		<h1 style="color: white;">ENCARGOS</h1>
	</div> -->

	<!-- SOBRE MI -->
	<div class="contenedor_4--flex" id="Seccion_5">
		<div class="contenedor_4__div1">
			<img class="contenedor_4__div1__img" loading="lazy" alt="Fotografia de perfil" src="<?php echo base_url();?>assets/images/<?php echo $perfilArtista['nombre_Fotografia'];?>"/>
		</div>
		<div class="contenedor_4__div2">
			<textarea class="contenedor_4__div2--textarea_1" id="Cont_Perfil" name="sobreMi"><?php echo $perfilArtista['perfil']?></textarea>
			<div class="contenedor_4--redes">
				<div>
					<i class="fab fa-facebook contenedor_4--icono_2"></i>
				</div>
				<div>
					<i class="fab fa-pinterest contenedor_4--icono_2"></i>
				</div>
				<div>
					<i class="fab fa-instagram contenedor_4--icono_2"></i>
				</div>
				<div>
					<i class="fas fa-envelope contenedor_4--icono_2"></i>
				</div>
				<div>
					<i class="fab fa-whatsapp contenedor_4--icono_2"></i>
				</div>
				<div>
					<i class="fab fa-twitter contenedor_4--icono_2"></i>
				</div>
			</div>
		</div>
	</div>

	<!-- TIENDA -->
	<!-- <div class="contenedor_5" id="Seccion_6">
		<div class="">
			<h1 style="color: white;">TIENDA</h1>
		</div>
	</div> -->
	
	<!-- CONTACTO -->
	<div class="cont_contacto">
		<div class="ContenedorTitulo" id="Seccion_7">
			<div class="ContenedorTitulo_div1">
				<img class="imagen--portada" loading="lazy" src="<?php echo base_url();?>assets/images/Pavoreal.jpg"/>
			</div>
			<div class="ContenedorTitulo_div2  cont_contacto--titulo">
				<h1 class="ContenedorTitulo--h1_1">Salomon UrreArt</h1> 
				<h2 class="ContenedorTitulo--h2_1">Pinto por y para la naturaleza</h2>
			</div>
		</div>
		<div class="cont_Formulario">
			<form action="<?php echo base_url();?>SalomonPanel_C/recibeContacto" method="POST" autocomplete="off" onsubmit="return validarDatos()">
				<label class="cont_Formulario--label">Contactame</label>
				<input class="cont_Formulario--input" type="text" name="nombre" placeholder="Nombre"/>
				<input class="cont_Formulario--input" type="text" name="correo" placeholder="correo"/>
				<input class="cont_Formulario--input" type="text"  name="ciudad" placeholder="ciudad / pais"/>
				<textarea class="cont_Formulario--textarea" name="asunto" placeholder="asunto"></textarea> 
				<input class="cont_Formulario--submit" type="submit" value="Enviar"/>
			</form>
		</div>
	</div>
</div>


<script src="<?php echo base_url();?>assets/javascript/funcionesVarias.js?v=<?php echo rand();?>"></script> 
<script src="<?php echo base_url();?>assets/javascript/E_Inicio.js?v=<?php echo rand();?>"></script> 

</body>
</html>