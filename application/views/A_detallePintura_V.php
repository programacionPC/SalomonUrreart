<!-- Archivo llamado via AJAX por medio de la función Llamar_diapositivaPintura() ubicada en detallePintura_V.php reemplaza el contenido del div id="Imagen_Detalle"-->
<?php
	if(!empty($ultimoID_Pintura['ID_Pintura'])){//cuando llega al ultimo cuadro y muestra nuevamente el primero	
		$ID_MostrarPintura = $ultimoID_Pintura['ID_Pintura'];	
		$NombreImgPintura = $ultimoID_Pintura['nombre_ImgPintura'];
		if($ultimoID_Pintura['disponible']){	?>
			<label class="disponible disponible--true" onclick="Llamar_carrito()">disponible</label>
			<?php
		}
		else{	?>
			<label class="disponible">vendido</label>
			<?php
		}	
	}
	else if(!empty($primerID_Pintura['ID_Pintura'])){//cuando llega al primer cuadro y muestra nuevamente el ultimo		
		$ID_MostrarPintura = $primerID_Pintura['ID_Pintura'];	
		$NombreImgPintura = $primerID_Pintura['nombre_ImgPintura'];
		if($primerID_Pintura['disponible']){	?>
			<label class="disponible disponible--true" onclick="Llamar_carrito()">disponible</label>
			<?php
		}
		else{	?>
			<label class="disponible">vendido</label>
			<?php
		}	
	}
	else{//Cuando se encuantra entre los cuadros intermedios (Entre el primero y el ultimo)
		$ID_MostrarPintura = $diapositivaPintura['ID_Pintura'];
		$NombreImgPintura= $diapositivaPintura['nombre_ImgPintura'];
		if($diapositivaPintura['disponible']){	
			$NombreImgPintura = $diapositivaPintura['nombre_ImgPintura'];
			$Nombre_pintura = $diapositivaPintura['nombre_pintura'];
			$Tecnica_pintura = $diapositivaPintura['tecnica_pintura'];
			$Medida_pintura = $diapositivaPintura['medida_pintura'];	?>
			<label class="disponible disponible--true" onclick="Llamar_carrito('<?php echo $NombreImgPintura?>','<?php echo $Nombre_pintura?>','<?php echo $Tecnica_pintura?>','<?php echo $Medida_pintura?>')">disponible</label>
			<?php
		}
		else{	?>
			<label class="disponible">vendido</label>
			<?php
		}	
	}
?>

<i class="fas fa-chevron-left cont_ponchoDetalle--iconoLeft primerPoncho" onclick="Llamar_detallePintura('<?php echo $ID_MostrarPintura;?>', 'Retroceder')"></i>
<i class="fas fa-chevron-right cont_ponchoDetalle--iconoRight ultimoPoncho" onclick="Llamar_detallePintura('<?php echo $ID_MostrarPintura;?>', 'Avanzar')"></i>

<div class="cont_ponchoDetalle--img">	
	<?php				?>
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
			$Contador ++;
			endforeach;
		}
		?>  
	</div>
</div>
<div class="cont_ponchoDetalle--leyenda">
	<h1 class="cont_ponchoDetalle--h1"><?php echo $diapositivaPintura['nombre_pintura'];?></h1>
	<p class="cont_ponchoDetalle--p1"><?php echo $diapositivaPintura['medida_pintura'];?></p> 
	<p class="cont_ponchoDetalle--p1"><?php echo $diapositivaPintura['tecnica_pintura'];?></p> 
</div>

<script src="<?php echo base_url();?>assets/javascript/A_DetallesPintura.js?v=<?php echo rand();?>"></script> 