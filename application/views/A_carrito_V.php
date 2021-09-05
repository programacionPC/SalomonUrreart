<!-- Alimenta div en detallePintura_V.php mediante AJAX -->
<div class="cont_carrito--principal" >
	<!-- ICONO CERRAR -->
	<a class="a_1" href="<?php echo base_url() . 'Pinturas_C/fauna';?>"><i class="fas fa-times"></i></a>
	
	<h1 class="cont_carrito--h1">Añadiste una obra al carrito de compras</h1>
	<div class="cont_carrito--flex">
		<div class="cont_carrito--div-1">
			<img class="imagen_3" src="<?php echo base_url() . "assets/images/pinturas/" . $nombre_ImgPintura;?>"/>
		</div>
		<div class="cont_carrito--leyenda">
			<p style="color:white;" class=""><?php echo $nombre_Pintura;?></p>
			<p style="color:white;" class=""><?php echo $tecnica_Pintura;?></p> 
			<p style="color:white;" class=""><?php echo $medida_Pintura;?></p> 
		</div>
	</div>
	<div class="cont_carrito--MetodoPago">
		<P class="cont_carrito--" style="color:white; font-size:2em">Metodos de pago</P>
		<div class="cont_carrito--MetodoPago--items">
			<input type="radio" name="pago" id="Paypal">
			<label class="cont_carrito--label" for="Paypal">Paypal</label>
		</div>
		<div class="cont_carrito--MetodoPago--items">
			<input type="radio" name="pago" id="Transferencia">
			<label class="cont_carrito--label" for="Transferencia">Transferencia</label>
		</div>
		<div class="cont_carrito--MetodoPago--items">
			<input type="radio" name="pago" id="PagoMovil">
			<label class="cont_carrito--label" for="PagoMovil">Pago Movil</label>
		</div>
	</div>
	<br>

	<label class="cont_carrito--boton">Comprar ahora</label>
	<label class="cont_carrito--boton" onclick="AlmacenarObra('<?php echo $nombre_ImgPintura;?>', '<?php echo $nombre_Pintura;?>', '<?php echo $tecnica_Pintura;?>', '<?php echo $medida_Pintura;?>')">Añadir otra obra</label>
</div>