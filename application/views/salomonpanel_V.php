<?php defined('BASEPATH') OR exit('No direct script access allowed');   ?>

<!-- Se coloca el CDN para la libreria JQuery, necesaria para la previsualización de la imagen--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <div class="cont_portada--menu">
        <div class="cont_portada--div-1">
            <h1 class="ContenedorTitulo--h1_1">Salomon UrreArt</h1> 
            <h2 class="ContenedorTitulo--h2_1">Panel de administración</h2>
        </div>
        <ul class="cont_portada--ul">
            <li><a class="cont_portada--li" href="#Portada">Imagen portada</a></li>
            <li><a class="cont_portada--li" href="#Colecciones">Colecciones</a></li>
            <li><a class="cont_portada--li" href="#Pinturas">Pinturas</a></li>
            <li><a class="cont_portada--li" href="#Galeria">Ponchos</a></li>
            <li><a class="cont_portada--li" href="#UltimasObras">Ultimas obras</a></li>
            <li><a class="cont_portada--li" href="#SobreMi">Sobre el artista</a></li>
            <li><hr></li>
            <li><a class="cont_portada--li" href="<?php echo base_url();?>">Sitio web</a></li>
        </ul>
    </div>
    <div class="cont_portada">
        <img class="cont_portada--imagen" src="<?php echo base_url();?>assets/images/Caballo-min.jpg"/>
    </div>

    <!-- IMAGEN PORTADA -->
    <div class="cont_panel">
        <div class="cont_panel__did-1"></div>
        <div style="width: 50%; margin-left:10%;">
            <fieldset class="fieldset_1 fieldset_3" id="Portada"> 
                <legend class="legend_1">Imagen principal</legend>
                <?php 
                if(!isset($datosPintura['nombre_ImgPintura'])){
                    $datosPintura['nombre_ImgPintura'] = 'imagen.png';
                }?>
                <img class="cont_Poncho__img" id="" alt="Fotografia de pintura" src="<?php echo base_url();?>assets/images/portadas/<?php echo $datosPintura['nombre_ImgPintura'];?>"/>
                <form action="<?php echo base_url(); ?>SalomonPanel_C/recibePoncho" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div id="muestrasImg_2"></div> 
                    <label class="label_1" for="Etiqueta_ImgPrincipal">Añadir imagen</label>
                    <label class="">no mayor a 2 Mb de peso</label> 
                    <input class="boton" type="submit" value="Guardar imagen principal"/>
                </form>
            </fieldset>
        </div>
    </div>

    <!-- COLECCIONES -->
    <div class="cont_panel">
        <div class="cont_panel__did-1"></div>        
        <div style="width: 50%; margin-left:10%;">
            <fieldset class="fieldset_1 fieldset_3" id="Colecciones">
                <a id="Colecciones" class="ancla_2"></a>
                <legend class="legend_1">Colecciones</legend>
                <form action="<?php echo base_url(); ?>SalomonPanel_C/recibeColecciones" method="POST" autocomplete="off">       
                    <div>
                        <div id="Contenedor_79">
                            <!-- div a clonar sin eventos y oculto mediante z-index = -1  -->
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
                                //Entra en el IF cuando no hay categorias de pinturas creadas   
                                if($coleccionArtista == Array ( )){    ?>
                                    <div class="contenedor_80" id="Contenedor_80">
                                    <input class="input_13 input_13A input_12 borde_1 seccionesJS" type="text" name="coleccion[]" id="Coleccion" placeholder="Indica una nueva categoría"/>
                                        <div id="EtiquetaIcono">
                                            <span class="span_10"><i class="fas fa-times contenedor_80--eliminar  span_14_js"></i><span> 
                                            <input class="contador-coleccion contador_JS" id="Contador_<?php //echo $Contador;?>" type="text" value="25"/>
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
                                            <div style="width: 15%;"">
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
                        <div style="width: 70%;">
                            <label class="label_1" id="Label_5">Añadir categoría</label>
                        </div>
                    </div> 
                    <input class="boton" type="submit" value="Guardar categorías"/>
                </form>
            </fieldset>
        </div>
    </div>

    <!-- AÑADIR PINTURAS -->
    <div class="cont_panel">
        <div class="cont_panel__did-1"></div>
        <div style="width: 50%; margin-left:10%;">
            <fieldset class="fieldset_1 fieldset_3" id="Pinturas"> 
                <legend class="legend_1">Pinturas</legend>
                <form action="<?php echo base_url(); ?>SalomonPanel_C/recibePintura" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div id="muestrasImg_2"></div> 
                        <div>
                            <?php 
                            if(!isset($datosPintura['nombre_ImgPintura'])){
                                $datosPintura['nombre_ImgPintura'] = 'imagen.png';
                            }?>
                            <select class="input_1" name="coleccion">
                                <option>Colección</option>
                                <?php 
                                foreach($coleccionArtista as $Key) : ?>
                                    <option value="<?php echo $Key['ID_Coleccion'];?>"><?php echo $Key['nombre_coleccion']?></option>
                                    <?php
                                endforeach;?>
                            </select>
                            
                            <input class="input_1" type="text" name="nombre_Pintura" placeholder="Nombre de la obra"/>
                            
                            <input class="input_1" type="text" name="medidas_Pintura" placeholder="Medidas de la obra"/>
                            
                            <input class="input_1" type="text" name="tecnica_Pintura" placeholder="Tecnica de la obra"/>
                            
                            <label class="label_1" for="Etiqueta_ImgPintura">Añadir imagen</label>
                            <label class="">no mayor a 2 Mb de peso</label> 
                            
                            <img class="cont_Poncho__img" id="Img_Pinturas" alt="Fotografia de pintura" src="<?php echo base_url();?>assets/images/pinturas/<?php echo $datosPintura['nombre_ImgPintura'];?>"/>
                            <input class="ocultar" type="file" name="imagen_Pintura" id="Etiqueta_ImgPintura"/>        
                        </div>   
                    <input class="boton" type="submit" value="Guardar pintura"/>
                </form>
                <?php 
                $ContadorPintura = 1;
                foreach($datosPintura as $Row) :                
                    $file_data = array(
                    'ID_Pintura' => isset($Row['ID_Pintura']) ? $Row['ID_Pintura'] : '',
                    'Nombre_Coleccion' => isset($Row['nombre_coleccion']) ? $Row['nombre_coleccion'] : '',
                    'Nombre_Pintura' => isset($Row['nombre_pintura']) ? $Row['nombre_pintura'] : '', 
                    'Medida_Pintura' => isset($Row['medida_pintura']) ? $Row['medida_pintura'] : '', 
                    'Tecnica_Pintura' => isset($Row['tecnica_pintura']) ? $Row['tecnica_pintura'] : '', 
                    'Nombre_ImgPintura' => isset($Row['nombre_ImgPintura']) ? $Row['nombre_ImgPintura'] : '',   
                    );  
                    ?>
                    <!-- div que muestra las pinturas cargadas en BD -->
                    <div class="cont_muestrasImgPanel--flex" id="<?php echo 'EliminarPintura_' . $ContadorPintura;?>">
                        <div class="cont_muestrasImgPanel--flex__div-1">
                            <img class="imagen_2" alt="Fotografia de pintura" src="<?php echo base_url();?>assets/images/pinturas/<?php echo $file_data['Nombre_ImgPintura']?>"/>    
                        </div>
                        <div>
                            <input class="cont_muestrasImgPanel--flex___input" type="text" readonly value="<?php echo $file_data['Nombre_Coleccion'];?>"/>
                            <br>
                            <input class="cont_muestrasImgPanel--flex___input" type="text" readonly value="<?php echo $file_data['Nombre_Pintura'];?>"/>
                            <br>
                            <input class="cont_muestrasImgPanel--flex___input" type="text" readonly value="<?php echo $file_data['Medida_Pintura'];?>"/>
                            <br>
                            <input class="cont_muestrasImgPanel--flex___input" type="text" readonly value="<?php echo $file_data['Tecnica_Pintura'];?>"/>
                            <br>
                            <label class="label_1" onclick="eliminarPintura(<?php echo 'EliminarPintura_' . $ContadorPintura;?>, <?php echo $file_data['ID_Pintura'];?>)">Eliminar</label>
                        </div> 
                    </div>
                    <?php                
                    $ContadorPintura ++;
                endforeach;   ?>
            </fieldset> 
        </div>
    </div>

    <!-- PONCHOS -->
    <div class="cont_panel">
        <div class="cont_panel__did-1"></div>
        <div style="width: 50%; margin-left:10%;">
            <fieldset class="fieldset_1 fieldset_3" id="Galeria"> 
                <legend class="legend_1">Ponchos</legend>
                <form action="<?php echo base_url(); ?>SalomonPanel_C/recibePoncho" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div id="muestrasImg_2"></div> 
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
                        <label class="label_1" for="ImgInp_1">Añadir imagen</label>
                        <label class="">no mayor a 2 Mb de peso</label> 
                        <br>
                        <img class="cont_Poncho__img" id="Blah_1" alt="Fotografia de perfil" src="<?php echo base_url();?>assets/images/ponchos/<?php echo $datosPoncho['nombre_ImgPoncho'];?>"/>
                        <input class="ocultar" type="file" name="imagen_Poncho" id="ImgInp_1"/>                  
                    </div>
                    <input class="boton" type="submit" value="Guardar poncho"/>
                </form>
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
                    <!-- div que muestra los ponchos cargados en BD -->
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
            </fieldset>
        </div>
    </div>

    <!-- ULTIMAS OBRAS -->
    <div class="cont_panel">
        <div class="cont_panel__did-1"></div>
        <div style="width: 50%; margin-left:10%;">
            <fieldset class="fieldset_1 fieldset_3" id="UltimasObras"> 
                <legend class="legend_1">Ultimas obras</legend>
                <form action="<?php echo base_url(); ?>SalomonPanel_C/recibeUltimsObras" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div id="muestrasImg_2"></div> 
                    <div>
                        <?php 
                        if(!isset($datosUltimasObras['nombre_UltimaObra'])){
                            $datosUltimasObras['nombre_ImgUltimaObra'] = 'imagen.png';
                        }?>
                        <input class="input_1" type="text" name="nombre_UltimasObras" placeholder="Nombre de la obra"/>
                        <br>
                        <input class="input_1" type="text" name="medidas_UltimasObras" placeholder="Medidas de la obra"/>
                        <br>
                        <input class="input_1" type="text" name="tecnica_UltimasObras" placeholder="Tecnica de la obra"/>
                        <br>
                        <label class="label_1" for="ImagenUltimasObras">Añadir imagen</label>
                        <label class="">no mayor a 2 Mb de peso</label> 
                        <br>
                        <img class="cont_Poncho__img" id="Blah_3" alt="Fotografia de perfil" src="<?php echo base_url();?>assets/images/ultimaObra/<?php echo $datosUltimasObras['nombre_ImgUltimaObra'];?>"/>
                        <input class="ocultar" type="file" name="imagen_UltimasObras" id="ImagenUltimasObras"/>        
                    </div>   
                    <input class="boton" type="submit" value="Guardar última obra"/>
                </form>
                <?php 
                $Contador = 1;
                foreach($datosUltimasObras as $RowUltimasObras) :                
                    $file_data_UltimaObra = array(
                    'ID_UltimaObra' => isset($RowUltimasObras['ID_UltimaObra']) ? $RowUltimasObras['ID_UltimaObra'] : '',
                    'Nombre_UltimaObra' => isset($RowUltimasObras['nombre_UltimaObra']) ? $RowUltimasObras['nombre_UltimaObra'] : '', 
                    'Tamanio_UltimaObra' => isset($RowUltimasObras['tamanio_UltimaObra']) ? $RowUltimasObras['tamanio_UltimaObra'] : '', 
                    'Tecnica_UltimaObra' => isset($RowUltimasObras['tecnica_UltimaObra']) ? $RowUltimasObras['tecnica_UltimaObra'] : '', 
                    'Nombre_ImgUltimaObra' => isset($RowUltimasObras['nombre_ImgUltimaObra']) ? $RowUltimasObras['nombre_ImgUltimaObra'] : '');  ?>

                    <!-- div que muestra las ultimas obras cargados en BD -->
                    <div class="cont_muestrasImgPanel--flex" id="<?php echo 'EliminarUltimaObra_' . $Contador;?>">
                        <div class="cont_muestrasImgPanel--flex__div-1">
                            <img class="imagen_2" alt="Fotografia de ultima obra" src="<?php echo base_url();?>assets/images/ultimaObra/<?php echo $file_data_UltimaObra['Nombre_ImgUltimaObra'];?>"/>    
                        </div>
                        <div>
                            <input class="cont_muestrasImgPanel--flex___input" id="<?php //echo $ID_Poncho;?>" type="text" readonly value="<?php echo $file_data_UltimaObra['Nombre_UltimaObra'];?>"/>
                            <br>
                            <input class="cont_muestrasImgPanel--flex___input" id="<?php //echo $ID_Poncho;?>" type="text" readonly value="<?php echo $file_data_UltimaObra['Tamanio_UltimaObra'];?>"/>
                            <br>
                            <input class="cont_muestrasImgPanel--flex___input" id="<?php //echo $ID_Poncho;?>" type="text" readonly value="<?php echo $file_data_UltimaObra['Tecnica_UltimaObra'];?>"/>
                            <br>
                            <label class="label_1" onclick="eliminarUltimaObra(<?php echo 'EliminarUltimaObra_' . $Contador;?>, <?php echo $file_data_UltimaObra['ID_UltimaObra'];?>)">Eliminar</label>
                        </div> 
                    </div>
                    <?php                
                    $Contador ++;
                endforeach;   ?>
            </fieldset> 
        </div>
    </div>
        
    <!-- SOBRE MI -->      
    <div class="cont_panel">
        <div class="cont_panel__did-1"></div>  
        <div style="width: 50%; margin-left:10%;">
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
                                <!-- <input class="contador" id="ID_Contador" type="text" value="1000"/> -->
                            </div>
                        </div>
                    </div>   
                    <input class="boton" type="submit" value="Guardar perfil"/>
                </form> 
            </fieldset>
        </div>
    </div>


<!-- <script src="<?php echo base_url();?>assets/javascript/funcionesVarias.js?v=<?php echo rand();?>"></script> -->
<script src="<?php echo base_url();?>assets/javascript/E_SalomonPanel.js?v=<?php echo rand();?>"></script> 
<script src="<?php echo base_url();?>assets/javascript/A_SalomonPanel.js?v=<?php echo rand();?>"></script> 

<script>     
    //Da una vista previa de las ultimas imagenes
    function readImagenUltimasObras(input, id_Label){
        // console.log("______Desde readImagenUltimasObras()______", input + ' | ' + id_Label)
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                id_Label.attr('src', e.target.result); //Renderizamos la imagen
            }
            reader.readAsDataURL(input.files[0]);
        }
    }        
    $("#ImagenUltimasObras").change(function(){
        console.log("Desde cargar poncho")
        // Código a ejecutar cuando se detecta un cambio de imagen de tienda
        var id_Label = $('#Blah_3');
        readImagenUltimasObras(this, id_Label);
    });

    // *****************************************************************************************
    //Da una vista previa de los ponchos
    function readImagePoncho(input, id_Label){
        // console.log("______Desde readImagePoncho()______", input + ' | ' + id_Label)
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                id_Label.attr('src', e.target.result); //Renderizamos la imagen
            }
            reader.readAsDataURL(input.files[0]);
        }
    }        
    $("#ImgInp_1").change(function(){
        // console.log("Desde cargar poncho")
        // Código a ejecutar cuando se detecta un cambio de imagen de tienda
        var id_Label = $('#Blah_1');
        readImagePoncho(this, id_Label);
    });

    // *****************************************************************************************
    //Da una vista previa de las pinturas
    function readImagePintura(input, id_Label){
        // console.log("______Desde readImagePintura()______", input + ' | ' + id_Label)
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                id_Label.attr('src', e.target.result); //Renderizamos la imagen
            }
            reader.readAsDataURL(input.files[0]);
        }
    }        
    $("#Etiqueta_ImgPintura").change(function(){
        // console.log("Desde cargar poncho")
        // Código a ejecutar cuando se detecta un cambio de imagen de tienda
        var id_Label = $('#Img_Pinturas');
        readImagePintura(this, id_Label);
    });

    // *****************************************************************************************
    
    //Da una vista previa de la foto de perfil
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
        // console.log("Desde cargar foto de perfil")
        // Código a ejecutar cuando se detecta un cambio de imagen de tienda
        var id_Label = $('#blah_2');
        readImage(this, id_Label);
    });
</script>

