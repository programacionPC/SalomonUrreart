<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div style="background-color: var(--FondoImagenDetalle);" id="Miimagen">
	<a class="a_1" href="<?php echo base_url() . 'Ponchos_C';?>"><i class="fas fa-times"></i></a>
	<div class="cont_ponchoDetalle" id="Cont_PonchoDetalle">
		<i class="fas fa-chevron-left cont_ponchoDetalle--iconoLeft" onclick="Llamar_sliderPoncho('<?php echo $detallePoncho['ID_Poncho'];?>', 'Retroceder')"></i>
		<i class="fas fa-chevron-right cont_ponchoDetalle--iconoRight" onclick="Llamar_sliderPoncho('<?php echo $detallePoncho['ID_Poncho'];?>', 'Avanzar')"></i>
		<div class="cont_ponchoDetalle--img">
			<img class="imagen_3" src="<?php echo base_url() . "assets/images/ponchos/" . $detallePoncho['nombre_ImgPoncho'];?>"/>
		</div>
		<div class="cont_ponchoDetalle--leyenda">
			<h1 class="cont_ponchoDetalle--h1"><?php echo $detallePoncho['nombrePoncho'];?></h1>
			<p class="cont_ponchoDetalle--p1"><?php echo $detallePoncho['medidaPoncho'];?></p> 
			<p class="cont_ponchoDetalle--p1"><?php echo $detallePoncho['tecnicaPoncho'];?></p> 
		</div>
	</div>
</div>

<script src="<?php echo base_url();?>assets/javascript/A_DetallesPoncho.js?v=<?php echo rand();?>"></script> 

<script>
	//Muestra el sitio web en pantalla completa
	var imagen = document.getElementById("Miimagen");
	
	function getFullscreen(element){
		console.log("Elemento ", element)
		if(element.requestFullscreen) {
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


	imagen.addEventListener("click", function(e){//E= el id dela fotografia donde se hizo click  DOMContentLoaded
		
		console.log("click en  ", e)
		
	// window.addEventListener("DOMContentLoaded", function(e){
		getFullscreen(this);
	},false);
</script>
