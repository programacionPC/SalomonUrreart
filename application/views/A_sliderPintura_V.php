<!-- Archivo llamado via AJAX por medio de la función Llamar_sliderPintura() ubicada en detallePintura_V.php -->
<?php
	if(!empty($ultimoID_Pintura['ID_Pintura'])){	
		if($ultimoID_Pintura['ID_Pintura'] == $sliderPintura['ID_Pintura']){?>
			<style>
				.ultimoPoncho{
					color: rgba(255, 255, 255, 0.2);
					cursor: default;
				}
			</style>
		<?php
		}
	}
	if(!empty($primerID_Pintura['ID_Pintura'])){	
		if($primerID_Pintura['ID_Pintura'] == $sliderPintura['ID_Pintura']){	?>
			<style>
				.primerPoncho{
					color: rgba(255, 255, 255, 0.2);
					cursor: default;
				}
			</style>
			<?php
		}
	}
?>

<i class="fas fa-chevron-left cont_ponchoDetalle--iconoLeft primerPoncho" onclick="Llamar_sliderPintura('<?php echo $sliderPintura['ID_Pintura'];?>', 'Retroceder')"></i>
<i class="fas fa-chevron-right cont_ponchoDetalle--iconoRight ultimoPoncho" onclick="Llamar_sliderPintura('<?php echo $sliderPintura['ID_Pintura'];?>', 'Avanzar')"></i>

<div class="cont_ponchoDetalle--img">
	<img class="imagen_3" src="<?php echo base_url() . "assets/images/pinturas/" . $sliderPintura['nombre_ImgPintura'];?>"/>
</div>
<div class="cont_ponchoDetalle--leyenda">
	<h1 class="cont_ponchoDetalle--h1"><?php echo $sliderPintura['nombre_pintura'];?></h1>
	<p class="cont_ponchoDetalle--p1"><?php echo $sliderPintura['medida_pintura'];?></p> 
	<p class="cont_ponchoDetalle--p1"><?php echo $sliderPintura['tecnica_pintura'];?></p> 
</div>

