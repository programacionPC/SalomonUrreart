<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- CARGA LOS ESTILOS DEL SLIDER -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/EsTilosSliderPoncho.css?v=<?php echo rand();?>"/>

<div class="contenedor_3"> 
	<a class="a_1" href="<?php echo base_url() . 'Inicio_C';?>"><i class="fas fa-times"></i></a>

	<!-- SLIDER -->
	<div class="cont_slider--poncho--div1" id="Cont_galeria_ponchos">
		<div id="slider" class="my-slider">
			<?php
			foreach($ponchos as $Row) :	?>
				<div class="item">
					<img class="cont_slider--poncho--img imagen_2--JS" id="<?php //echo $ID_Poncho?>" src="<?php echo base_url() . "assets/images/ponchos/" . $Row['nombre_ImgPoncho'];?>"/>
				</div>
				<?php
			endforeach;	?>
		</div>
	</div>

	<h1 class="Cont_poncho--h1_1">Salomon UrreArt</h1>

	<!-- IMAGENES EN GALERIA -->
    <div class="cont_ponchos_galeria" id="Cont_galeria_ponchos">
		<?php 
		foreach($ponchos as $RowPonchos){
			$ID_Poncho = $RowPonchos['ID_Poncho']; 
			$NombrePoncho = $RowPonchos['nombrePoncho'];            
			$Nombre_ImgPoncho = $RowPonchos['nombre_ImgPoncho']  ?>
			<div class="cont_ponchos--item">
				<img class="cont_poncho--img imagen_2--JS lazyload" id="<?php echo $ID_Poncho?>" loading="lazy" data-src="<?php echo base_url() . "assets/images/ponchos/" . $Nombre_ImgPoncho;?>" width="320" height="10" alt=""/>
			</div>
			<?php
		}   ?>
	</div>
</div>
 
<script src="<?php echo base_url();?>assets/javascript/E_Ponchos.js?v=<?php echo rand();?>"></script>  
<script src="<?php echo base_url();?>assets/javascript/SliderPoncho.js?v=<?php echo rand();?>"></script>  

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

</body>
</html>