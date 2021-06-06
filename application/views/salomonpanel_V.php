<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Se coloca en SDN para la libreria JQuery, necesaria para la previsualización de la imagen--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div>
	<div class="contenedor_1" id="Seccion_1">
		<div class="ContenedorTitulo">
			<div class="ContenedorTitulo_div1">
				<img class="imagen--portada" src="<?php echo base_url();?>assets/images/Caballo.jpg"/>
			</div>
			<div class="ContenedorTitulo_div2">
				<h1 class="ContenedorTitulo--h1_1">Salomon UrreArt</h1> 
				<h2 class="ContenedorTitulo--h2_1">Panel de administración</h2>
			</div>
            <div class="ContenedorTitulo_secciones">
                <ul class="ul--panel">
                    <li><a class="li--Enlaces" href="#Colecciones">Colecciones</a></li>
                    <li><a class="li--Enlaces" href="#Galeria">Galerias</a></li>
                    <li><a class="li--Enlaces" href="#">Videos</a></li>
                    <li><a class="li--Enlaces" href="#SobreMi">Sobre mi</a></li>
                    <li><hr></li>
                    <li><a class="li--Enlaces" href="PaginaInicio">Sitio web</a></li>
                </ul>
            </div>
		</div>
	</div>

    
    <!-- COLECCIONES -->
    <form action="<?php echo base_url(); ?>SalomonPanel_C/recibeColecciones" method="POST" enctype="multipart/form-data" autocomplete="off" >
        <fieldset class="fieldset_1 fieldset_3">
            <a id="Colecciones" class="ancla_2"></a>
            <legend class="legend_1">Colecciones</legend>
            <div>
                <div id="Contenedor_79">
                    <!-- div a clonar sin eventos y oculto mediante z-index = -1 -->
                    <div class="contenedor_80A" id="Contenedor_80A">
                        <div class="contenedor_80C" id="Contenedor_80C">
                            <input class="input_13 input_13A input_12" type="text"/>
                            <div>
                                <span class="span_10"><i class="fas fa-times contenedor_80--eliminar  span_14_js"></i><span> 
                                <input class="contador-coleccion contador_2--seccion" type="text" value="25"/>
                            </div>
                        </div>
                    </div>
                    <div style="width:70%;" id="Contenedor_70A">
                        <?php   
                        // echo "<pre>";
                        // print_r($Coleccion[0]);
                        // echo "</pre>";
                        //Entra en el IF cuando no hay secciones creadas   
                        if($coleccionArtista == Array ( )){    ?>
                            <div class="contenedor_80" id="Contenedor_80">
                                <input class="input_13 input_13A input_12 borde_1 seccionesJS" type="text" name="coleccion[]" id="Coleccion" placeholder="Indica una nueva colección"/>
                                <div id="EtiquetaIcono">
                                    <span class="span_10"><i class="fas fa-times contenedor_80--eliminar  span_14_js"></i><span> 
                                    <input class="contador-coleccion contador_JS" id="Contador_<?php //secho $Contador;?>" type="text" value="25"/>
                                </div>
                            </div>
                            <?php
                        }   
                        else{  //Entra en el ELSE cuando hay secciones creadas  
                            $Contador = 1;
                            foreach($coleccionArtista as $row) :
                                $ID_Coleccion = $row['ID_Coleccion'];
                                $NombreColeccion = $row['nombre_coleccion'];
                                ?>                                
                                <div class="contenedor_80" id="Contenedor_80">
                                    <input class="input_13 input_13A input_12 borde_1 seccionesJS" type="text" name="coleccion[]" id="Coleccion<?php echo $Contador;?>" value="<?php echo $NombreColeccion;?>" onblur="Llamar_ActualizarSeccion(this.value,'<?php echo $ID_Coleccion;?>')"/>
                                    <!-- Icono de eliminar -->
                                    <div style="width:15%;"">
                                        <span class="span_10"><i class="fas fa-times contenedor_80--eliminar  span_14_js" id="<?php echo $ID_Coleccion;?>"></i><span> 
                                        <input class="contador-coleccion contador_JS" id="Contador_<?php echo $Contador;?>" type="text" value="25"/>
                                    </div>
                                </div>
                                <?php
                                $Contador++;
                            endforeach;   
                        }   ?>
                    </div>
                </div>
                <div style="width: 40%;">
                    <label class="label_4" id="Label_5">Añadir colección</label>
                </div>
            </div>
            <input class="label_4" type="submit" value="Guardar colecciones"/>
        </fieldset>
    </form>

        <!-- GALERIA -->
        <div class="" id="muestrasImg_2"></div>  
            <a id="Galeria" class=""></a>
            <fieldset class="fieldset_1 fieldset_3">
                <legend class="legend_1">Galería</legend>
                <div style="display: flex;">
                    <div style="width: 20%;">
                        <label for="MostrarColeccion">Colección</label>
                        <input type="radio" name="mostrarColeccion" id="MostrarColeccion">
                    </div>
                    <div>
                        <p class="p_5">Añadir imagenes no mayores a 2 Mb de peso</p>
                        <label class="label_5 label_23" for="ImgInp_2">Añadir imagen</label>
                        <input class="ocultar" type="file" name="imagenes[]" multiple="multiple" id="ImgInp_2" onchange="muestraImg()"/>                  
                    </div>
                </div>
            </fieldset>
        </div>    

        <!-- VIDEOS -->
        <div class="" id="muestrasImg_2"></div>  
            <a id="Videos" class=""></a>
            <fieldset class="fieldset_1 fieldset_3">
                <legend class="legend_1">Videos</legend>
                <div style="display: flex;">
                    <div style="width: 20%;">
                        <label for="MostrarColeccion">Videos</label>
                        <input type="radio" name="mostrarColeccion" id="MostrarColeccion">
                    </div>
                    <div>
                        <p class="p_5">Añadir imagenes no mayores a 2 Mb de peso</p>
                        <label class="label_5 label_23" for="ImgInp_2">Añadir imagen</label>
                        <input class="ocultar" type="file" name="imagenes[]" multiple="multiple" id="ImgInp_2" onchange="muestraImg()"/>                  
                    </div>
                </div>
            </fieldset>
        </div>    
        
        <!-- SOBRE MI -->    
            <fieldset class="fieldset_1 fieldset_3">
            <a id="SobreMi" class=""></a>
                <legend class="legend_1">Sobre Mi</legend>
    <form action="<?php echo base_url(); ?>SalomonPanel_C/recibeSobreMi" method="POST" enctype="multipart/form-data" autocomplete="off" >
        <div>
                <div style="display: flex;">
                    <div class="contenedor_119 borde_1 borde_2">
                        <img class="contenedor_119__img" id="blah_2" alt="Fotografia de perfil" src="<?php echo base_url();?>assets/images/<?php echo $datosArtista['nombre_Fotografia'];?>"/>
                        <label for="imgInp_2"><span class="span_18 borde_1"><i class="fas fa-pencil-alt icono_4"></i></span></label>
                        <input class="ocultar" type="file" name="imagen_Perfil" id="imgInp_2"/>
                    </div>
                    <div style="width: 90%;">
                        <textarea class="textarea_2" id="ContenidoPerfil" name="perfil"><?php echo $datosArtista['perfil'];?></textarea>
                        <input class="contador" id="ID_Contador" type="text" value="700"/>
                    </div>
                </div>
        </div>   
        <input class="label_4" type="submit" value="Guardar perfil"/>
    </form> 
            </fieldset>
</div>


<script src="<?php echo base_url();?>assets/javascript/funcionesVarias.js?v=<?php echo rand();?>"></script>

<script src="<?php echo base_url();?>assets/javascript/E_SalomonPanel.js?v=<?php echo rand();?>"></script> 

<script> 
        //Da una vista previa de la imagen de perfil
        function readImage(input, id_Label){
            // console.log("______Desde readImage()______", input + ' | ' + id_Label)
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    id_Label.attr('src', e.target.result); //Renderizamos la imagen
                }
                reader.readAsDataURL(input.files[0]);
            }
        }        
        $("#imgInp_2").change(function(){
            // Código a ejecutar cuando se detecta un cambio de imagen de tienda
            var id_Label = $('#blah_2');
            readImage(this, id_Label);
        });
    </script>

