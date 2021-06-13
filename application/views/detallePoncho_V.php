<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<div style="background-color: var(--Fondo);">
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


<!--  <script src="<?php echo base_url();?>assets/javascript/funcionesVarias.js?v=<?php echo rand();?>"></script> 
<script src="<?php echo base_url();?>assets/javascript/E_Inicio.js?v=<?php echo rand();?>"></script>  -->
<script src="<?php echo base_url();?>assets/javascript/A_DetallesPoncho.js?v=<?php echo rand();?>"></script> 

