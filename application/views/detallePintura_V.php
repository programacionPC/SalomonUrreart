<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<div style="background-color: var(--Fondo);">
		<div class="cont_ponchoDetalle" id="Cont_PinturaDetalle">
			<i class="fas fa-chevron-left cont_ponchoDetalle--iconoLeft" onclick="Llamar_sliderPintura('<?php echo $detallePintura['ID_Pintura'];?>', 'Retroceder')"></i>
			<i class="fas fa-chevron-right cont_ponchoDetalle--iconoRight" onclick="Llamar_sliderPintura('<?php echo $detallePintura['ID_Pintura'];?>', 'Avanzar')"></i>
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

