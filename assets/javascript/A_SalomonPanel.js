var http_request = false
var peticion= conexionAJAX()
function conexionAJAX(){
    http_request = false
    if(window.XMLHttpRequest){ // Mozilla, Safari,...
        http_request = new XMLHttpRequest()
        if (http_request.overrideMimeType){
            http_request.overrideMimeType('text/xml')
        }
    }
    else if(window.ActiveXObject){ // IE
        try{
            http_request = new ActiveXObject("Msxml2.XMLHTTP")
        }
            catch(e){
                try{
                    http_request = new ActiveXObject("Microsoft.XMLHTTP")
                } 
                catch(e){}
            }
        }
        if(!http_request){
            alert('No es posible crear una instancia XMLHTTP')
            return false
        }
        //   else{
        //     alert("Instancia creada exitosamente ok")
        // }
        return http_request
    } 

// *************************************************************************************************
    //Elimina un pintura
    function llamar_eliminarPintura(ID_Pintura){
        console.log("______Desde llamar_eliminarPintura()______", ID_Pintura)
        
        var url = "SalomonPanel_C/eliminarPintura/" + ID_Pintura
        http_request.open('GET', url, true)  
        peticion.onreadystatechange = respuesta_eliminarPintura
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded")
        peticion.send("null")
    }                                                                        
    function respuesta_eliminarPintura(){
        if(peticion.readyState == 4){
            if(peticion.status == 200){  
                //No hace falta traer una respuesta del servidor, la operacion se hace y ya
            } 
            else{
                alert('Problemas con la petición.')
            }
        }
        else{ //en caso contrario, mostramos un gif simulando una precarga
            // document.getElementById('Mostrar_Maquinas').innerHTML='Cargando registros';
        }
    }

// *************************************************************************************************
    //Elimina un poncho
    function llamar_eliminarPoncho(ID_Poncho){
        console.log("______Desde llamar_eliminarPoncho()______", ID_Poncho)
        
        var url = "SalomonPanel_C/eliminarPoncho/" + ID_Poncho
        http_request.open('GET', url, true)  
        peticion.onreadystatechange = respuesta_eliminarPoncho
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded")
        peticion.send("null")
    }                                                                        
    function respuesta_eliminarPoncho(){
        if(peticion.readyState == 4){
            if(peticion.status == 200){  
                //No hace falta traer una respuesta del servidor, la operacion se hace y ya
            } 
            else{
                alert('Problemas con la petición.')
            }
        }
        else{ //en caso contrario, mostramos un gif simulando una precarga
            // document.getElementById('Mostrar_Maquinas').innerHTML='Cargando registros';
        }
    }

// *************************************************************************************************
    //Elimina una seccion
    function Llamar_EliminarSeccion(ID_Coleccion, CantSeccion){
        // console.log("______Desde Llamar_EliminarSeccion()______", ID_Coleccion + " / " + CantSeccion)
        
        //Si hay una sola sección se detiene el proceso de eliminación
        // if(CantSeccion == 1){
        //     return
        // }
        // else{
            var url = "SalomonPanel_C/eliminarColeccion/" + ID_Coleccion
            http_request.open('GET', url, true)  
            peticion.onreadystatechange = respuesta_EliminarSeccion
            peticion.setRequestHeader("content-type","application/x-www-form-urlencoded")
            peticion.send("null")
        // }
    }                                                                        
    function respuesta_EliminarSeccion(){
        if(peticion.readyState == 4){
            if(peticion.status == 200){  
                //No hace falta traer una respuesta del servidor, la operacion se hace y ya
                // document.getElementById('ReadOnly').innerHTML = peticion.responseText             
            } 
            else{
                alert('Problemas con la petición.')
            }
        }
        else{ //en caso contrario, mostramos un gif simulando una precarga
            // document.getElementById('Mostrar_Maquinas').innerHTML='Cargando registros';
        }   
    } 

// *************************************************************************************************
    //Cambia el nombre de una sección cuando se avandona el foco
    function Llamar_ActualizarSeccion(Seccion, ID_Seccion){
        // console.log("______Desde Llamar_ActualizarSeccion()______",Seccion + " / "  + ID_Seccion)

        var url = "../Cuenta_C/ActualizarSeccion/" + Seccion + "/" + ID_Seccion
        http_request.open('GET', url, true)  
        peticion.onreadystatechange = respuesta_ActualizarSeccion
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded")
        peticion.send("null")
    }                                                                        
    function respuesta_ActualizarSeccion(){
        if(peticion.readyState == 4){
            if(peticion.status == 200){  
                document.getElementById('ReadOnly').innerHTML = peticion.responseText 
            } 
            else{
                alert('Problemas con la petición.')
            }
        }
        else{ //en caso contrario, mostramos un gif simulando una precarga
            // document.getElementById('Mostrar_Maquinas').innerHTML='Cargando registros';
        }
    }

// *************************************************************************************************
    //Cambia el nombre de una sección cuando se avandona el foco
    function Llamar_actualizarPoncho(ID_Poncho){
        // console.log("______Desde Llamar_ActualizarSeccion()______",Seccion + " / "  + ID_Poncho)

        var url = "../Cuenta_C/ActualizarPoncho/" + ID_Poncho
        http_request.open('GET', url, true)  
        peticion.onreadystatechange = respuesta_ActualizarPoncho
        peticion.setRequestHeader("content-type","application/x-www-form-urlencoded")
        peticion.send("null")
    }                                                                        
    function respuesta_ActualizarPoncho(){
        if(peticion.readyState == 4){
            if(peticion.status == 200){  
                document.getElementById('ReadOnly').innerHTML = peticion.responseText 
            } 
            else{
                alert('Problemas con la petición.')
            }
        }
        else{ //en caso contrario, mostramos un gif simulando una precarga
            // document.getElementById('Mostrar_Maquinas').innerHTML='Cargando registros';
        }
    }

// *************************************************************************************************