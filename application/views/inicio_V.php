<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<!-- VENTANA MODAL -->
	<div class="cont_modal" id="VentanaModal">				
		<label class="cont_modal--label" onclick="ocultarModal()">cerrar</label>
		<p class="cont_modal--p">Sitio web en construcción.</p>
		<img class="cont_modal--logo" src="<?php echo base_url();?>assets/images/logo-Salomon.png"/>
	</div>

	<!-- ****************************************************************************************************** -->

	<!-- PORTADA -->
	<div class="cont_portada" id="Seccion_1">
		<img class="cont_portada--imagen" src="<?php echo base_url();?>assets/images/Caballo-min.jpg"/>
		<div class="cont_portada__div-1">
			<p class="cont_portada__p-1">SalomonUrreart</p>
			<p class="cont_portada__p-2">Pinto por y para la naturaleza</p>
		</div>
	</div>

	<!-- ULTIMAS OBRAS -->
    <div class="cont_ultimasObras" id="Seccion_2">
		<!-- <div class="cont_ultimasObras--aside">
			<label class="">Hola</label>
		</div> -->
		<div class="cont_ultimasObras--item">
			<?php 
			foreach($ultimasObras as $RowUltimasObras):
				$ID_UltimaObra = $RowUltimasObras['ID_UltimaObra']; 
				$Nombre_UltimaObra = $RowUltimasObras['nombre_UltimaObra'];            
				$Nombre_ImgUltimaObra = $RowUltimasObras['nombre_ImgUltimaObra'];  ?>
				<div class="cont_ultimasObras__div-1" id="Cont_UltimaObra_<?php echo $ID_UltimaObra?>">
					<img class="cont_ultimasObras--img imagen_2--JS lazyload" loading="lazy" data-src="<?php echo base_url() . "assets/images/ultimaObra/" . $Nombre_ImgUltimaObra;?>" width="320" height="10" alt="" id="Imagen_<?php echo $ID_UltimaObra?>"/>
					<div class="cont_ultimasObras--leyenda" id="Leyenda">
						<h1 class="cont_ponchoDetalle--h1"><?php echo $Nombre_UltimaObra;?></h1>
					</div>
				</div>
				<?php
			endforeach;  ?>
		</div>
	</div>
 
	<!-- SOBRE MI -->
	<div class="cont_sobreMi" id="Seccion_5">
		<h1 class="cont_sobreMi__h1">Sobre el artista</h1>
		<div class="cont_sobreMi--flex">
			<div class="cont_sobreMi__div1">
				<img class="cont_sobreMi__div1__img lazyload" loading="lazy" alt="Fotografia de perfil" data-src="<?php echo base_url();?>assets/images/<?php echo $perfilArtista['nombre_Fotografia'];?>" width="320" height="320" alt=""/>
			</div>
			<div class="cont_sobreMi__div2">
				<textarea class="cont_sobreMi__div2--textarea_1" id="Cont_Perfil" name="sobreMi" readonly><?php echo $perfilArtista['perfil']?></textarea>
			</div>
		</div>
	</div>

	<!-- CONTACTO -->
	<div class="cont_contacto" id="Seccion_7">
		<div class="cont_contacto__div-1">
			<div class="cont_Formulario">
				<form action="<?php echo base_url();?>SalomonPanel_C/recibeContacto" method="POST" autocomplete="off" onsubmit="return validarDatos()">
					<label class="cont_Formulario--label">Preguntas o consultas ¿?</label>
					<br><br>
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

<!-- Script para evaluar si el navegador soporta lazy-load -->
<script>
	if ('loading' in HTMLImageElement.prototype){  
		// Si el navegador soporta lazy-load, tomamos todas las imágenes que tienen la clase
		// `lazyload`, obtenemos el valor de su atributo `data-data-src` y lo inyectamos en el `data-src`.
		const images = document.querySelectorAll("img.lazyload");
		images.forEach(img => {
			img.src = img.dataset.src;
		});
	} 
	else {     
		// Importamos dinámicamente la libreria `lazysizes`
		let script = document.createElement("script");
		script.async = true; 
		script.src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js";
		// script.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js";
		document.body.appendChild(script);
	}
</script>

