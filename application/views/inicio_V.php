<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div>
	<!-- PORTADA -->
	<div class="contenedor_1" id="Seccion_1">
		<div class="ContenedorTitulo">
			<div class="ContenedorTitulo_div1">
				<img class="imagen--portada" src="<?php echo base_url();?>assets/images/Caballo-min.jpg"/>
			</div>
			<div class="Menu_horizontal">
				<div class="Menu_horizontal__div1">
					<h1 class="ContenedorTitulo--h1_1">Salomon UrreArt</h1> 
				</div>
                <ul class="Menu_horizontal__ul">
                    <li><a class="li--Enlaces" href="#Seccion_1">INICIO</a></li>
					<li class="menuLi_1"><a class="header__a MostrarSubMenu_JS">PINTURAS</a>
						<ul class="menuContenedor_3" id="MenuContenedor_3">
							<li><a class="menuLi_2 li--Enlaces enlace_JS" href="Pinturas_C/fauna">Fauna</a></li>
						</ul> 	
					</li>
                    <li><a class="li--Enlaces" href="Ponchos_C">PONCHOS</a></li>
                    <li><a class="li--Enlaces" href="#Seccion_2">ULTIMAS OBRAS</a></li>
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

	<!-- ULTIMAS OBRAS -->
    <div class="cont_ultimasObras" id="Seccion_2">
		<div class="cont--menu cont--menu--UltimoasObras"></div>
		<?php 
		foreach($ultimasObras as $RowUltimasObras){
			$ID_UltimaObra = $RowUltimasObras['ID_UltimaObra']; 
			$Nombre_UltimaObra = $RowUltimasObras['nombre_UltimaObra'];            
			$Nombre_ImgUltimaObra = $RowUltimasObras['nombre_ImgUltimaObra'];  ?>
			<div class="cont_ultimasObras--item" >
				<img class="cont_poncho--img imagen_2--JS lazyload" loading="lazy" data-src="<?php echo base_url() . "assets/images/ultimaObra/" . $Nombre_ImgUltimaObra;?>" width="320" height="10" alt="" id="Imagen_<?php echo $ID_UltimaObra?>"/>
			</div>
			<?php
		}   ?>
	</div>
 
	<!-- SOBRE MI -->
	<div class="contenedor_4--flex" id="Seccion_5">
		<div class="cont--menu"></div>
		<div class="contenedor_4">
			<div class="contenedor_4__div1">
				<img class="contenedor_4__div1__img lazyload" loading="lazy" alt="Fotografia de perfil" data-src="<?php echo base_url();?>assets/images/<?php echo $perfilArtista['nombre_Fotografia'];?>" width="320" height="320" alt=""/>
			</div>
			<div class="contenedor_4__div2">
				<textarea class="contenedor_4__div2--textarea_1" id="Cont_Perfil" name="sobreMi"><?php echo $perfilArtista['perfil']?></textarea>
			</div>
		</div>
	</div>
	
	<!-- CONTACTO -->
	<div class="cont_contacto" id="Seccion_7">
		<div class="cont--menu"></div>
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

<script>
	//Muestra el sitio web en pantalla completa
    window.addEventListener("click", function(e){    
        var ID_Imagen = e.target.id

		var imagen = document.getElementById(ID_Imagen);

		function getFullscreen(element){
			// console.log("Elemento ", element)
			if(element.requestFullscreen) {
				element.requestFullscreen();		} 
			else if(element.mozRequestFullScreen) {
			element.mozRequestFullScreen();
			} 
			else if(element.webkitRequestFullscreen) {
			element.webkitRequestFullscreen();
			} 
			else if(element.msRequestFullscreen) {
			element.msRequestFullscreen();
			}
		}

		getFullscreen(imagen);

		imagen.addEventListener("click", function(e){//E= el id dela fotografia donde se hizo click  DOMContentLoaded
			getFullscreen(this);
		},false);
    }, false) 
</script>