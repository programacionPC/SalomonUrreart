<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div style="color: white; background-color:var(--FondoImagenDetalle)">
	<!-- ICONO FULLSCREEM -->
	<label class="cont_poncho--label" id="Abrir"><i class="fas fa-expand-alt"></i></label>

	<div style="background-color: var(--FondoImagenDetalle);" id="Miimagen">
		<!-- ICONO CERRAR -->
		<a class="a_1" href="<?php echo base_url() . 'Pinturas_C/fauna';?>"><i class="fas fa-times"></i></a>
		<div class="cont_ponchoDetalle" id="Cont_PinturaDetalle">
			<?php
				if($detallePintura['disponible']){	
					$NombreImgPintura = $detallePintura['nombre_ImgPintura'];
					$Nombre_pintura = $detallePintura['nombre_pintura'];
					$Tecnica_pintura = $detallePintura['tecnica_pintura'];
					$Medida_pintura = $detallePintura['medida_pintura'];	?>
					<label class="disponible disponible--true" onclick="Llamar_carrito('<?php echo $NombreImgPintura?>','<?php echo $Nombre_pintura?>','<?php echo $Tecnica_pintura?>','<?php echo $Medida_pintura?>')">disponible</label>
					<?php
				}
				else{	?>
					<label class="disponible">vendido</label>
					<?php
				}	
			?>

			<i class="fas fa-chevron-left cont_ponchoDetalle--iconoLeft" onclick="Llamar_detallePintura('<?php echo $detallePintura['ID_Pintura'];?>', 'Retroceder')"></i>
			<i class="fas fa-chevron-right cont_ponchoDetalle--iconoRight" onclick="Llamar_detallePintura(<?php echo $detallePintura['ID_Pintura'];?>, 'Avanzar')"></i>

			<div class="cont_ponchoDetalle--img">					
				<!-- IMAGENES PRINCIPAL -->
				<div style="height: 90%;" id="Imagen_Detalle">
					<img class="imagen_3" src="<?php echo base_url() . "assets/images/pinturas/" . $detallePintura['nombre_ImgPintura'];?>"/>
				</div>
				<!-- IMAGENES MINIATURAS -->
				<div class="cont_miniaturas">
					<?php                
					// if($imagenMiniatura != Array()){      
						$Contador = 1;   
						//    
						foreach($imagenMiniatura as $keyImagenMiniatura) :   ?>
							<img class="imagen_11 borde_1" id="Imagen_<?php echo $Contador ?>" alt="Fotografia no disponible" src="<?php echo base_url()?>assets/images/pinturas/miniaturaPinturas/<?php echo $keyImagenMiniatura['nombre_ImagenMiniatura'];?>" onclick="Llamar_VerMiniatura('<?php echo $keyImagenMiniatura['ID_ImagenMiniatura']?>')"/>
							<?php
							$Contador ++;
						endforeach;
					// }
					?>  
				</div>
			</div>
			<div class="cont_ponchoDetalle--leyenda">
				<h1 class="cont_ponchoDetalle--h1"><?php echo $detallePintura['nombre_pintura'];?></h1>
				<p class="cont_ponchoDetalle--p1"><?php echo $detallePintura['medida_pintura'];?></p> 
				<p class="cont_ponchoDetalle--p1"><?php echo $detallePintura['tecnica_pintura'];?></p> 
			</div>
		</div>		
	</div>
</div>

<!-- CARRITO DE COMPRA ALIMENTADO POR A_carrito_V.php-->
<div class="cont_carrito" id="Modal_carrito"></div>
	
<script src="<?php echo base_url();?>assets/javascript/A_DetallesPintura.js?v=<?php echo rand();?>"></script> 
<script src="<?php echo base_url();?>assets/javascript/E_Carrito.js?v=<?php echo rand();?>"></script> 
<script src="<?php echo base_url();?>assets/javascript/FullScreem.js?v=<?php echo rand();?>"></script> 

</body>
</html>