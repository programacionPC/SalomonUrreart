<!-- Archivo llamado via AJAX por medio de la función Llamar_sliderPoncho() ubicada en detallePoncho_V.php -->
<?php
	if(!empty($ultimoID_Poncho['ID_Poncho'])){	
		$ID_MostrarPoncho = $ultimoID_Poncho['ID_Poncho'];	
		$NombreImgPoncho = $ultimoID_Poncho['nombre_ImgPoncho'];
	}
	else if(!empty($primerID_Poncho['ID_Poncho'])){	
		$ID_MostrarPoncho = $primerID_Poncho['ID_Poncho'];	
		$NombreImgPoncho = $primerID_Poncho['nombre_ImgPoncho'];
	}
	else{
		$ID_MostrarPoncho = $sliderPoncho['ID_Poncho'];
		$NombreImgPoncho= $sliderPoncho['nombre_ImgPoncho'];
	}
?>

<i class="fas fa-chevron-left cont_ponchoDetalle--iconoLeft primerPoncho" onclick="Llamar_sliderPoncho('<?php echo $ID_MostrarPoncho;?>', 'Retroceder')"></i>
<i class="fas fa-chevron-right cont_ponchoDetalle--iconoRight ultimoPoncho" onclick="Llamar_sliderPoncho('<?php echo $ID_MostrarPoncho;?>', 'Avanzar')"></i>

<div class="cont_ponchoDetalle--img">
	<img class="imagen_3" src="<?php echo base_url() . "assets/images/ponchos/" . $NombreImgPoncho;?>"/>
</div>
<div class="cont_ponchoDetalle--leyenda">
	<h1 class="cont_ponchoDetalle--h1"><?php echo $sliderPoncho['nombrePoncho'];?></h1>
</div>

