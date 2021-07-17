<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="cont_carrito--principal" >
	<!-- ICONO CERRAR -->
	<a class="a_1" href="<?php echo base_url() . 'Pinturas_C/fauna';?>"><i class="fas fa-times"></i></a>
	<P style="color:white; font-size:2em">Añadiste una obra al carrito de compras</P>
	<div class="cont_carrito--flex">
		<div style="width: 40%;">
			<img class="imagen_3" src="<?php echo base_url() . "assets/images/pinturas/" . $nombre_ImgPintura;?>"/>
		</div>
		<div class="cont_carrito--leyenda">
			<h1 style="color:white;" class="cont_carrito--h1"><?php echo $nombre_Pintura;?></h1>
			<p style="color:white;" class="cont_carrito--p1"><?php echo $tecnica_Pintura;?></p> 
			<p style="color:white;" class="cont_carrito--p1"><?php echo $medida_Pintura;?></p> 
		</div>
	</div>
	<P class="cont_carrito--" style="color:white; font-size:2em">Metodos de pago</P>
	<p style="color:white;">Paypal</p>
	<p style="color:white;">Transferencia</p>
	<p style="color:white;">Pago Movil</p>
	<br><br>
	<label class="cont_carrito--boton">Comprar ahora</label>
	<label class="cont_carrito--boton" onclick="AlmacenarObra('<?php echo $nombre_ImgPintura;?>', '<?php echo $nombre_Pintura;?>', '<?php echo $tecnica_Pintura;?>', '<?php echo $medida_Pintura;?>')">Añadir otra obra</label>
</div>