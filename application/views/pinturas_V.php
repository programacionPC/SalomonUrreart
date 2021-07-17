<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="contenedor_3"> 
    <div class="cont_galeria--principal">
        <div class="cont_galeria" id="Cont_galeria_pinturas">	
            <?php 
            foreach($pinturas as $RowPinturas){
                $ID_Pintura = $RowPinturas['ID_Pintura']; 
                $Nombre_Pintura = $RowPinturas['nombre_pintura'];            
                $Nombre_ImgPintura = $RowPinturas['nombre_ImgPintura']  ?>
                <div class="cont_Galeria--item">
                    <img class="cont_Galeria--img imagen_2--JS lazyload" id="<?php echo $ID_Pintura?>" loading="lazy" data-src="<?php echo base_url() . "assets/images/pinturas/" . $Nombre_ImgPintura;?>" width="320" height="10" alt=""/>
                </div>
                <?php
            }   ?>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>assets/javascript/funcionesVarias.js?v=<?php echo rand();?>"></script> 
<script src="<?php echo base_url();?>assets/javascript/E_Pinturas.js?v=<?php echo rand();?>"></script>  

<!-- Script para evaluar si el navegador soporta lazy-load -->
<script>
	if ('loading' in HTMLImageElement.prototype){  
		// Si el navegador soporta lazy-load, tomamos todas las imágenes que tienen la clase
		// `lazyload`, obtenemos el valor de su atributo `data-data-src` y lo inyectamos en el `data-src`.
		const images = document.querySelectorAll("img.lazyload");
		images.forEach(img => {
			img.src = img.dataset.src;
		});
	} 
	else {     
		// Importamos dinámicamente la libreria `lazysizes`
		let script = document.createElement("script");
		script.async = true; 
		script.src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js";
		// script.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js";
		document.body.appendChild(script);
	}
</script>

</body>
</html>