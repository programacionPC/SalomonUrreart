<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div>
<!-- PORTADA -->
	<div class="contenedor_1" id="Seccion_1">
		<div class="ContenedorTitulo">
			<div class="ContenedorTitulo_div1">
				<img class="imagen--portada" src="<?php echo base_url();?>assets/images/Caballo.jpg"/>
			</div>
			<div class="ContenedorTitulo_div2">
				<h1 class="ContenedorTitulo--h1_1">Salomon UrreArt</h1> 
				<h2 class="ContenedorTitulo--h2_1">Pinto por y para la naturaleza</h2>
			</div>
		</div>
	</div>

	
	<!-- GALERÍA -->
	<div class="contenedor_2a">
		<div class="contenedor_2" id="Seccion_2">
			<div class="contenedor_2__div" id="Watercolor">
				<img class="imagen_1" src="<?php echo base_url();?>assets/images/DSC_9538-45.jpg"/>
				<h1 class="h1_1">Watercolor</h1> 
			</div>
			<div class="contenedor_2__div" id="Sketches">
				<img class="imagen_1" src="<?php echo base_url();?>assets/images/Buho.jpg"/>
				<h1 class="h1_1">Sketches</h1> 
			</div>
			<div class="contenedor_2__div" id="Animal">
				<img class="imagen_1" src="<?php echo base_url();?>assets/images/Pajaro.jpg"/>
				<h1 class="h1_1">Animal moments</h1> 
			</div>
			<div class="contenedor_2__div" id="Ponchos">
				<img class="imagen_1" src="<?php echo base_url();?>assets/images/Pavoreal.jpg"/>
				<h1 class="h1_1">Ponchos</h1> 
			</div>
		</div>
		<div class="contenedor_2 contenedor_2--secundario" >
			<div class=" contenedor_2__div js">
				<img class="imagen_1" src="<?php echo base_url();?>assets/images/Lapa.jpg"/>
				<h1 class="h1_1">Palet</h1> 
			</div>
			<div class=" contenedor_2__div js">
				<img class="imagen_1" src="<?php echo base_url();?>assets/images/Camaleon.png"/>
				<h1 class="h1_1">Oil</h1> 
			</div>
			<div class=" contenedor_2__div js">
				<img class="imagen_1" src="<?php echo base_url();?>assets/images/Pavoreal.jpg"/>
				<h1 class="h1_1">Acrylic</h1> 
			</div>
		</div>
	</div>


	<!-- EVENTOS -->
	<div class="contenedor_3" id="Seccion_3">
		<div>
			<h1 class="h2_1">Muestra de la colección "Alma Silvestre"</h1> 
		</div>
		<div style="display: flex;">
			<!-- <div  style="width: 50%;">
				<img class="imagen--evento" src="<?php echo base_url();?>assets/images/Caballo.jpg"/>
			</div> -->
			<!-- <div style="width: 50%;">
				<label>Lugar</label>
				<input type="text"/>
				<br>
				<label>Fecha</label>
				<input type="text"/>
				<br>
				<label>Hora</label>
				<input type="text"/>
				<br>
				<textarea>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</textarea>
			</div> -->
		</div>
	</div>

	
	<!-- SOBRE MI -->
	<div  class="contenedor_4">
		<div class="contenedor_4--flex" id="Seccion_4">
			<div class="contenedor_4__div1">
				<img class="contenedor_4__div1__img" alt="Fotografia de perfil" src="<?php echo base_url();?>assets/images/<?php echo $perfilArtista['nombre_Fotografia'];?>"/>
			</div>
			<div class="contenedor_4__div2">
				<h1 class="h2_1">Sobre mi</h1>
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
	</div>


	<!-- TIENDA -->
	<div class="contenedor_5" id="Seccion_5">
		<div class="">
			<h1 class="h2_1">Tienda</h1> 
			<?php //echo $_SERVER['DOCUMENT_ROOT'] . '/assets/images/';?>
		</div>
	</div>
</div>


<script src="<?php echo base_url();?>assets/javascript/funcionesVarias.js?v=<?php echo rand();?>"></script> 
<script src="<?php echo base_url();?>assets/javascript/E_Inicio.js?v=<?php echo rand();?>"></script> 

