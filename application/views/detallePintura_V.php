<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div style="background-color: var(--FondoImagenDetalle);" id="Miimagen">
	<a class="a_1 a_1--oscuro" href="<?php echo base_url() . 'Pinturas_C/fauna';?>"><i class="fas fa-times"></i></a>
	<div class="cont_ponchoDetalle" id="Cont_PinturaDetalle">
		<i class="fas fa-chevron-left cont_ponchoDetalle--iconoLeft"></i>
		<i class="fas fa-chevron-right cont_ponchoDetalle--iconoRight" onclick="Llamar_sliderPintura(<?php echo $detallePintura['ID_Pintura'];?>, 'Avanzar')"></i>
		<div class="cont_ponchoDetalle--img">
			<img class="imagen_3" src="<?php echo base_url() . "assets/images/pinturas/" . $detallePintura['nombre_ImgPintura'];?>"/>
		</div>
		<div class="cont_ponchoDetalle--leyenda">
			<h1 class="cont_ponchoDetalle--h1"><?php echo $detallePintura['nombre_pintura'];?></h1>
			<p class="cont_ponchoDetalle--p1"><?php echo $detallePintura['medida_pintura'];?></p> 
			<p class="cont_ponchoDetalle--p1"><?php echo $detallePintura['tecnica_pintura'];?></p> 
		</div>
	</div>		
</div>
	
<script src="<?php echo base_url();?>assets/javascript/A_DetallesPintura.js?v=<?php echo rand();?>"></script> 

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

//************************************************************************************************ 

</script>
