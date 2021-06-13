<!-- Archivo llamado via AJAX por medio de la función Llamar_sliderPoncho() ubicada en detallePoncho_V.php -->
<?php
	// if($finslider_Left == true){	?>
		<!-- <style>
			.cc{
				color: rgba(255, 255, 255, 0.3);
				cursor: default;
			}
		</style> -->
		<?php
	// }
?>

<i class="fas fa-chevron-left cont_ponchoDetalle--iconoLeft cc" onclick="Llamar_sliderPoncho('<?php echo $sliderPoncho['ID_Poncho'];?>', 'Retroceder')"></i>
<i class="fas fa-chevron-right cont_ponchoDetalle--iconoRight cc" onclick="Llamar_sliderPoncho('<?php echo $sliderPoncho['ID_Poncho'];?>', 'Avanzar')"></i>

<div class="cont_ponchoDetalle--img">
	<img class="imagen_3" src="<?php echo base_url() . "assets/images/ponchos/" . $sliderPoncho['nombre_ImgPoncho'];?>"/>
</div>
<div class="cont_ponchoDetalle--leyenda">
	<h1 class="cont_ponchoDetalle--h1"><?php echo $sliderPoncho['nombrePoncho'];?></h1>
	<p class="cont_ponchoDetalle--p1"><?php echo $sliderPoncho['medidaPoncho'];?></p> 
	<p class="cont_ponchoDetalle--p1"><?php echo $sliderPoncho['tecnicaPoncho'];?></p> 
</div>

