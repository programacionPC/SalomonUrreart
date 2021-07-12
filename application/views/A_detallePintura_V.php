<!-- Archivo llamado via AJAX por medio de la función Llamar_DiapositivaPintura() ubicada en detallePintura_V.php reemplaza el contenido del div id="Imagen_Detalle"-->
<?php
	if(!empty($ultimoID_Pintura['ID_Pintura'])){	
		$ID_MostrarPintura = $ultimoID_Pintura['ID_Pintura'];	
		$NombreImgPintura = $ultimoID_Pintura['nombre_ImgPintura'];
	}
	else if(!empty($primerID_Pintura['ID_Pintura'])){	
		$ID_MostrarPintura = $primerID_Pintura['ID_Pintura'];	
		$NombreImgPintura = $primerID_Pintura['nombre_ImgPintura'];
	}
	else{
		$ID_MostrarPintura = $DiapositivaPintura['ID_Pintura'];
		$NombreImgPintura= $DiapositivaPintura['nombre_ImgPintura'];
	}
?>

<i class="fas fa-chevron-left cont_ponchoDetalle--iconoLeft primerPoncho" onclick="Llamar_detallePintura('<?php echo $ID_MostrarPintura;?>', 'Retroceder')"></i>
<i class="fas fa-chevron-right cont_ponchoDetalle--iconoRight ultimoPoncho" onclick="Llamar_detallePintura('<?php echo $ID_MostrarPintura;?>', 'Avanzar')"></i>

<div class="cont_ponchoDetalle--img">					
	<!-- IMAGENES PRINCIPAL -->
	<div style="height: 90%;" id="Imagen_Detalle">
		<img class="imagen_3" src="<?php echo base_url() . "assets/images/pinturas/" . $NombreImgPintura;?>"/>
	</div>
	<!-- IMAGENES SECUNDARIAS (MINIATURAS) -->
	<div style="height: 10%; text-align:center">
		<?php                
		if($imagenMiniatura != Array()){      
			$Contador = 1;   
			//$Datos proviene de      
			foreach($imagenMiniatura as $keyImagenMiniatura) :   ?>
				<img class="imagen_11 borde_1" id="Imagen_<?php echo $Contador ?>" alt="Fotografia no disponible" src="<?php echo base_url()?>assets/images/pinturas/miniaturaPinturas/<?php echo $keyImagenMiniatura['nombre_ImagenMiniatura'];?>" onclick="Llamar_VerMiniatura('<?php echo $keyImagenMiniatura['ID_ImagenMiniatura']?>')"/>
				<?php
				echo  $Contador;
			$Contador ++;
			endforeach;
		}
		?>  
	</div>
</div>
<div class="cont_ponchoDetalle--leyenda">
	<h1 class="cont_ponchoDetalle--h1"><?php echo $DiapositivaPintura['nombre_pintura'];?></h1>
	<p class="cont_ponchoDetalle--p1"><?php echo $DiapositivaPintura['medida_pintura'];?></p> 
	<p class="cont_ponchoDetalle--p1"><?php echo $DiapositivaPintura['tecnica_pintura'];?></p> 
</div>

<script src="<?php echo base_url();?>assets/javascript/A_DetallesPintura.js?v=<?php echo rand();?>"></script> 