<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Se coloca en SDN para la libreria JQuery, necesaria para la previsualización de la imagen--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
                    <!-- <li><a class="li--Enlaces" href="#Colecciones">Pinturas</a></li> -->
                    <li><a class="li--Enlaces" href="#Galeria">Ponchos</a></li>
                    <li><a class="li--Enlaces" href="#SobreMi">Sobre el artista</a></li>
                    <!-- <li><a class="li--Enlaces" href="#">Contacto</a></li> -->
                    <li><hr></li>
                    <li><a class="li--Enlaces" href="<?php echo base_url();?>">Sitio web</a></li>
                </ul>
            </div>
		</div>
	</div>

    
    <!-- COLECCIONES -->
    <!-- <fieldset class="fieldset_1 fieldset_3">
        <a id="Colecciones" class="ancla_2"></a>
        <legend class="legend_1">Pinturas</legend>
        <form action="<?php //echo base_url(); ?>SalomonPanel_C/recibeColecciones" method="POST" autocomplete="off">       
            <!-- <div> -->
                <!-- <div id="Contenedor_79">
                    <!-- div a clonar sin eventos y oculto mediante z-index = -1 
                    <div class="contenedor_80A" id="Contenedor_80A">
                        <div class="contenedor_80C" id="Contenedor_80C">
                            <input class="input_13 input_13A input_12" type="text"/>
                            <div>
                                <span class="span_10"><i class="fas fa-times contenedor_80--eliminar  span_14_js"></i><span> 
                                <input class="contador-coleccion contador_2--seccion" type="text" value="25"/>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div style="width:70%;" id="Contenedor_70A"> -->
                        <?php   
                        // echo "<pre>";
                        // print_r($Coleccion[0]);
                        // echo "</pre>";
                        //Entra en el IF cuando no hay secciones creadas   
                        // if($coleccionArtista == Array ( )){    ?>
                            <!-- <div class="contenedor_80" id="Contenedor_80">
                             <input class="input_13 input_13A input_12 borde_1 seccionesJS" type="text" name="coleccion[]" id="Coleccion" placeholder="Indica una nueva colección"/>
                                 <div id="EtiquetaIcono">
                                     <span class="span_10"><i class="fas fa-times contenedor_80--eliminar  span_14_js"></i><span> 
                                     <input class="contador-coleccion contador_JS" id="Contador_<?php //echo $Contador;?>" type="text" value="25"/>
                                 </div>
                             </div> -->
                            <?php
                        // }   
                        // else{  //Entra en el ELSE cuando hay secciones creadas  
                        //     $Contador = 1;
                        //     foreach($coleccionArtista as $row) :
                        //         $ID_Coleccion = $row['ID_Coleccion'];
                        //         $NombreColeccion = $row['nombre_coleccion'];
                                ?>                                
                                <!-- <div class="contenedor_80" id="Contenedor_80">
                                    <input class="input_13 input_13A input_12 borde_1 seccionesJS" type="text" name="coleccion[]" id="Coleccion<?php //echo $Contador;?>" value="<?php //echo $NombreColeccion;?>" onblur="Llamar_ActualizarSeccion(this.value,'<?php //echo $ID_Coleccion;?>')"/>
                                    <div style="width: 15%;"">
                                        <span class="span_10"><i class="fas fa-times contenedor_80--eliminar  span_14_js" id="<?php //echo $ID_Coleccion;?>"></i><span> 
                                        <input class="contador-coleccion contador_JS" id="Contador_<?php //echo $Contador;?>" type="text" value="25"/>
                                    </div>
                                </div> -->
                                <?php
                                // $Contador++;
                        //     endforeach;   
                        // }   ?>
               <!--     </div>
                </div>
                <div style="width: 70%;">
                    <label class="label_4" id="Label_5">Añadir colección</label>
                </div>
            </div> 
            <input class="label_4" type="submit" value="Guardar colecciones"/>
        </form>
    </fieldset> -->

    <!-- PONCHOS -->
    <fieldset class="fieldset_1 fieldset_3" id="Galeria"> 
        <legend class="legend_1">Ponchos</legend>
        <form action="<?php echo base_url(); ?>SalomonPanel_C/recibePoncho" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div id="muestrasImg_2"></div> 
                <p class="p_5">Añadir imagenes no mayores a 5 Mb de peso</p> 
                <div>
                    <?php 
                    if(!isset($datosPoncho['nombre_ImgPoncho'])){
                        $datosPoncho['nombre_ImgPoncho'] = 'imagen.png';
                    }?>
                    <input class="input_1" type="text" name="nombre_Poncho" placeholder="Nombre de la obra"/>
                    <br>
                    <input class="input_1" type="text" name="medidas_Poncho" placeholder="Medidas de la obra"/>
                    <br>
                    <input class="input_1" type="text" name="tecnica_Poncho" placeholder="Tecnica de la obra"/>
                    <br>
                    <img class="cont_Poncho__img" id="Blah_1" alt="Fotografia de perfil" src="<?php echo base_url();?>assets/images/ponchos/<?php echo $datosPoncho['nombre_ImgPoncho'];?>"/>
                    <label class="label_1" for="ImgInp_1">Añadir imagen</label>
                    <input class="ocultar" type="file" name="imagen_Poncho" id="ImgInp_1"/>                  
                    </div>
                </div>   
            </div>   
            <input class="label_4" type="submit" value="Guardar poncho"/>
        </form>

        <div class="cont_muestrasImgPanel">
            <?php 
            $Contador = 1;
            foreach($datosPoncho as $Row) :                
                $file_data = array(
                   'ID_Poncho' => isset($Row['ID_Poncho']) ? $Row['ID_Poncho'] : '',
                   'Nombre_Poncho' => isset($Row['nombrePoncho']) ? $Row['nombrePoncho'] : '', 
                   'Medida_Poncho' => isset($Row['medidaPoncho']) ? $Row['medidaPoncho'] : '', 
                   'Tecnica_Poncho' => isset($Row['tecnicaPoncho']) ? $Row['tecnicaPoncho'] : '', 
                   'Nombre_ImgPoncho' => isset($Row['nombre_ImgPoncho']) ? $Row['nombre_ImgPoncho'] : '',   
                );  
                ?>
                <div class="cont_muestrasImgPanel--flex" id="<?php echo 'EliminarPoncho_' . $Contador;?>">
                    <div class="cont_muestrasImgPanel--flex__div-1">
                        <img class="imagen_2" alt="Fotografia de poncho" src="<?php echo base_url();?>assets/images/ponchos/<?php echo $file_data['Nombre_ImgPoncho']?>"/>    
                    </div>
                    <div>
                        <input class="cont_muestrasImgPanel--flex___input" id="<?php //echo $ID_Poncho;?>" type="text" readonly value="<?php echo $file_data['Nombre_Poncho'];?>"/>
                        <br>
                        <input class="cont_muestrasImgPanel--flex___input" id="<?php //echo $ID_Poncho;?>" type="text" readonly value="<?php echo $file_data['Medida_Poncho'];?>"/>
                        <br>
                        <input class="cont_muestrasImgPanel--flex___input" id="<?php //echo $ID_Poncho;?>" type="text" readonly value="<?php echo $file_data['Tecnica_Poncho'];?>"/>
                        <br>
                        <label class="label_1" onclick="eliminarPoncho(<?php echo 'EliminarPoncho_' . $Contador;?>, <?php echo $file_data['ID_Poncho'];?>)">Eliminar</label>
                    </div> 
                </div>
                <?php                
                $Contador ++;
            endforeach;   ?>
        </div>
    </fieldset> 
  
        
    <!-- SOBRE MI -->    
    <fieldset class="fieldset_1 fieldset_3" id="SobreMi">
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


<!-- <script src="<?php echo base_url();?>assets/javascript/funcionesVarias.js?v=<?php echo rand();?>"></script> -->
<script src="<?php echo base_url();?>assets/javascript/E_SalomonPanel.js?v=<?php echo rand();?>"></script> 
<script src="<?php echo base_url();?>assets/javascript/A_SalomonPanel.js?v=<?php echo rand();?>"></script> 

<script>     
    //Da una vista previa de los ponchos
    function readImagePoncho(input, id_Label){
        console.log("______Desde readImagePoncho()______", input + ' | ' + id_Label)
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                id_Label.attr('src', e.target.result); //Renderizamos la imagen
            }
            reader.readAsDataURL(input.files[0]);
        }
    }        
    $("#ImgInp_1").change(function(){
        console.log("Desde cargar poncho")
        // Código a ejecutar cuando se detecta un cambio de imagen de tienda
        var id_Label = $('#Blah_1');
        readImagePoncho(this, id_Label);
    });

    // *****************************************************************************************
    
    //Da una vista previa de la foto de perfil
    function readImage(input, id_Label){
        console.log("______Desde readImage()______", input + ' | ' + id_Label)
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                id_Label.attr('src', e.target.result); //Renderizamos la imagen
            }
            reader.readAsDataURL(input.files[0]);
        }
    }        
    $("#imgInp_2").change(function(){
        console.log("Desde cargar foto de perfil")
        // Código a ejecutar cuando se detecta un cambio de imagen de tienda
        var id_Label = $('#blah_2');
        readImage(this, id_Label);
    });
</script>

