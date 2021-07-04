<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

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
		<div class="cont_ultimasObras--item">
			<?php 
			foreach($ultimasObras as $RowUltimasObras):
				$ID_UltimaObra = $RowUltimasObras['ID_UltimaObra']; 
				$Nombre_UltimaObra = $RowUltimasObras['nombre_UltimaObra'];            
				$Nombre_ImgUltimaObra = $RowUltimasObras['nombre_ImgUltimaObra'];  ?>
				<div style="padding-top: 5%" id="Cont_UltimaObra_<?php echo $ID_UltimaObra?>">
					<!-- <a class="" href="<?php echo base_url() . 'Inicio_C';?>"><i class="fas fa-times"></i></a> -->
					<img class="cont_ultimasObras--img imagen_2--JS lazyload" loading="lazy" data-src="<?php echo base_url() . "assets/images/ultimaObra/" . $Nombre_ImgUltimaObra;?>" width="320" height="10" alt="" id="Imagen_<?php echo $ID_UltimaObra?>"/>
					<div class="cont_ponchoDetalle--leyenda ocultar" id="Leyenda">
						<h1 class="cont_ponchoDetalle--h1"><?php echo $Nombre_UltimaObra;?></h1>
					</div>
				</div>
				<?php
			endforeach;  ?>
		</div>
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
        var ID_Imagen = e.target
		// console.log("ID click en", ID_Imagen.id)

        localStorage.setItem('ID_cont_img', ID_Imagen.id) 
        LS_ID_cont_img = localStorage.getItem('ID_cont_img')
		console.log("localStorage creada", LS_ID_cont_img)

        //Se obtiene el elemento padre donde se realizó click, este sera el que se muestra en pantalla completa
		var DivPantallaCompleta = ID_Imagen.parentElement
		// console.log("Elemento padre", DivPantallaCompleta)
		var ELementoAmpliar =  DivPantallaCompleta.id

		var imagen = document.getElementById(ELementoAmpliar);
		var LeyendaPantallaCompleta = document.getElementById("Leyenda")
		

		function getFullscreen(element){
			if(element.requestFullscreen){
				//Se muestra la leyenda de la obra cuando sea en pantalla completa
				LeyendaPantallaCompleta.classList.add("mostrar") 
				imagen.classList.remove("cont_ultimasObras--img") 
				DivPantallaCompleta.classList.add("mostrar_imgUltimaObra") 
				document.getElementById(ID_Imagen.id).classList.add("mostrar_img") 
				
				//Se invoca el metodo de pantalla completa
				element.requestFullscreen();
			} 
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

		imagen.addEventListener("click", function(ID_Imagen){//E= el id dela fotografia donde se hizo click  DOMContentLoaded
			getFullscreen(this);
		},false);
    }, false) 





	
	window.addEventListener("keydown", function(e){
		console.log("Click en tecla", e)
		if(e.keyCode == 27){
			// console.log("SALIENDO")
			// if(LS_ID_cont_img != ""){
			// 	console.log("ID_LocalStorage", LS_ID_cont_img)
				document.getElementById(LS_ID_cont_img).classList.remove("mostrar_img")
			// }
			// else{
			// 	console.log("NO EXISTE")
			// }
		}
	}, false);
	
	function ExitFullScreenMode(){
		if(document.exitFullscreen){
			document.exitFullscreen();
		}
		else if(document.webkitExitFullscreen){
			document.webkitExitFullscreen();
		} 
		else if(document.mozCancelFullScreen){
			document.mozCancelFullScreen();
		} 
		else if(document.msExitFullscreen){
			document.msExitFullscreen();
		}
	}
</script>
