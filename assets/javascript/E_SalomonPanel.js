document.getElementById("Label_5").addEventListener('click', clonarSeccion, false)

document.addEventListener("DOMContentLoaded", function(){autosize('ContenidoPerfil')}, false) 
document.addEventListener("DOMContentLoaded", function(){resize('ContenidoPerfil')}, false) 

// document.addEventListener("DOMContentLoaded", function(){CaracteresAlcanzados('ContenidoPerfil','ID_Contador')}, false)    

// document.getElementById("ContenidoPerfil").addEventListener('keydown', function(){contarCaracteres('ID_Contador','ContenidoPerfil', 700)}, false)

// document.getElementById("ContenidoPerfil").addEventListener('keydown', function(){valida_LongitudDes(700,'ContenidoPerfil')}, false)
// document.getElementById("ContenidoPerfil").addEventListener('keyup', function(){valida_LongitudDes(700,'ContenidoPerfil')}, false)


document.getElementById("ContenidoPerfil").addEventListener('keydown', function(){autosize('ContenidoPerfil')}, false)


//************************************************************************************************
//ELIMINAR COLECCIONES

            //*********DEBUG *************DEBUG *****************DEBUG **************
            //Función autoejecuble que oculta el menu horizontal
            // var ImagenesGaleria = (function(){ 
            //     let Padrecolecciones = document.getElementById("Contenedor_70A")
            //     console.log("Contenedor padre= ", Padrecolecciones)
            //     console.log("Elementos en contenedor padre= ", Padrecolecciones.childElementCount)
            // })();
            //*********DEBUG *************DEBUG *****************DEBUG **************

//Por medio de delegación de eventos se detecta la coleccion a eliminar
window.addEventListener('click', function(e){
    // console.log("______Desde funcion anonima que aplica listerner para eliminar colecciones______")

    var ElementoSeleccionado = e.target.classList[3]
    // console.log("Elementos Seleccionado= ", ElementoSeleccionado)

    //Se ubica el id del elemento seleccionado
    let ID_ElementoSeleccionado = e.target.id
    // console.log("ID_Coleccion a eliminar= ", ID_ElementoSeleccionado)

    if(ElementoSeleccionado == "span_14_js"){
        let ConfirmaEliminar = confirm("Se eliminará la coleccion y todas las obras incluidas en ella")

        if(ConfirmaEliminar == true){            
            //Contenedor padre de colecciones
            let Padrecolecciones = document.getElementById("Contenedor_70A")
            // console.log("Contenedor padre= ", Padrecolecciones)
            
            //Si hay más de una coleccion la elimina
            if(Padrecolecciones.childElementCount > 1){
                console.log("Entra en el IF");
                // Se obtiene el elemento padre donde se encuentra el boton donde se hizo click
                current_1 = e.target.parentElement
                current_2 = current_1.parentElement
                current_3 = current_2.parentElement

                console.log("div a eliminar", current_3)

                //Se obtiene el elemento hermano de current
                // let InputSeccion = current_2.previousElementSibling
                // console.log("Input Seccion", InputSeccion)
                
                //Se busca el nodo padre que contiene el elemento "current_3"
                let elementoPadre = current_3.parentElement
                
                //Se elimina la sección
                elementoPadre.removeChild(current_3)  
                // elementoPadre.removeChild(InputSeccion)             
            }
            else{// si solo hay una colecion, borrar el contenido del input                
                let PrimeraColeccion = document.getElementsByClassName("seccionesJS")[0]
                PrimeraColeccion.value = ""
            }

            //Se procede a eliminar del servidor
            Llamar_EliminarSeccion(ID_ElementoSeleccionado, Padrecolecciones.childElementCount)
        }  
    }  
}, false)

//************************************************************************************************
//Indica la cantidad de caracteres que quedan mientras se escribe
function contarCaracteres(ID_Contador, ContenidoPerfil, Max){
    // console.log("______Desde contarCaracteres()______", ID_Contador + " / " + ContenidoPerfil + " / " + Max) 
    let max = Max; 
    let cadena = document.getElementById(ContenidoPerfil).value; 
    let longitud = cadena.length; 

    if(longitud <= max) { 
        document.getElementById(ID_Contador).value = max-longitud; 
    } else { 
        document.getElementById(ID_Contador).value = cadena.subtring(0, max);
    } 
} 

//************************************************************************************************
//Indica la cantidad de caracteres que ya tiene el campo
function CaracteresAlcanzados(ContenidoPerfil, ID_Contador){
    // console.log("______Desde CaracteresAlcanzados()______", ContenidoPerfil + " / " + ID_Contador) 

    let Contenido = document.getElementById(ContenidoPerfil).value
    let Contador = document.getElementById(ID_Contador).value

    let CaracteresDisponibles = Contador - Contenido.length

    document.getElementById(ID_Contador).value = CaracteresDisponibles
} 

//************************************************************************************************ 
//Impide que se sigan introduciendo caracteres al alcanzar el limite maximo en un elmento
var contenidoControlado = "";    
function valida_LongitudDes(Max, ID_Contenido){
    // console.log("______Desde valida_LongitudDes()______", Max + " / "+ ID_Contenido) 
            
    //se averigua la cantidad de caracteres escritos 
    num_caracteresEscritos = document.getElementById(ID_Contenido).value.length

    if(num_caracteresEscritos > Max){ 
        document.getElementById(ID_Contenido).value = contenidoControlado; 
    }
    else{ 
        contenidoControlado = document.getElementById(ID_Contenido).value; 
    } 
} 

//************************************************************************************************
//Ajusta la altura del texarea según se vaya escribiendo en el mismo
function autosize(id){
    // console.log("______Desde autosize()______", id)
    let el = document.getElementById(id);
    
    setTimeout(function(){
        el.style.cssText = 'height:auto; padding:0';
        el.style.cssText = 'height:' + el.scrollHeight + 'px';
    },0);
}

//************************************************************************************************ 
//ajusta la altura de un texarea con respecto al contenido que trae de la BD
function resize(id){
    // console.log("______Desde resize()______", id) 
    let text = document.getElementById(id);
    text.style.height = 'auto';
    text.style.height = text.scrollHeight + 'px';
}

//************************************************************************************************
//CLONA UNA COLECCION
//Añade un nuevo input clonado del div colecciones
var incrementoSeccion = 1
function clonarSeccion(){
    console.log("______Desde clonarSeccion()______") 
    
    //Contenedor a clonar 
    let clonar = document.getElementById("Contenedor_80A")
    // console.log("div a clonar", clonar)
    
    //Contenedor padre
    let Padre = document.getElementById("Contenedor_79")
    // console.log("div padre", Padre)

    //Se crea el clon
    let Div_clon = clonar.cloneNode(true)
    console.log("div clon", Div_clon)

    //Se da una clase (Al parecer no hace ninguna función, pero se elimina y no hace el clon)
    Div_clon.classList = "contenedorUnico"

    //Se da un ID al input que se encuentra en el nuevo elemento clonado, el valor del id debe ser concecutivo a los que ya existan
    let SeccionesExistentes = document.getElementsByClassName("input_12")
    // console.log("Secciones Existentes", SeccionesExistentes.length)
    CantidadID_Existente = SeccionesExistentes.length
    incrementoSeccion = CantidadID_Existente + 1

    Div_clon.getElementsByClassName("input_12")[0].id = 'InputClon_' + incrementoSeccion 
    
    //Se da un name al input que se encuentra en el nuevo elemento clonado
    Div_clon.getElementsByClassName("input_12")[0].name = "coleccion[]" 
            
    //El valor del nuevo input debe estar vacio
    Div_clon.getElementsByClassName("input_12")[0].value = "" 

    //El placeholder del nuevo input 
    Div_clon.getElementsByClassName("input_12")[0].placeholder="Indica una categoría"
    
    //Se da un ID al input contador
    // Div_clon.getElementsByClassName("contador_2--coleccion")[0].id = 'Contador_' + incrementoSeccion 
    
    //Se especifica el div padre, donde se insertará el nuevo nodo (aparecerá de ultimo)
    Padre.appendChild(Div_clon)
    incrementoSeccion++
} 

//************************************************************************************************
function eliminarPintura(ID_Javascript, ID_PHP){
    console.log(ID_Javascript)

    //Se obtiene el elemento a eliminar
    // elementoEliminar = document.getElementById(ID_Javascript) 
    console.log("div a eliminar", ID_Javascript)

    // Se obtiene el elemento padre donde se encuentra el poncho donde se hizo click
    elementoPadre = ID_Javascript.parentElement
    console.log("elemento padre", elementoPadre)

    //Se elimina la sección
    elementoPadre.removeChild(ID_Javascript)  

    //Se elimina de la BD
    llamar_eliminarPintura(ID_PHP)
}

//************************************************************************************************
function eliminarPoncho(ID_Javascript, ID_PHP){

    //Se obtiene el elemento a eliminar
    // elementoEliminar = document.getElementById(ID_Javascript) 
    console.log("div a eliminar", ID_Javascript)

    // Se obtiene el elemento padre donde se encuentra el poncho donde se hizo click
    elementoPadre = ID_Javascript.parentElement
    console.log("elemento padre", elementoPadre)

    //Se elimina la sección
    elementoPadre.removeChild(ID_Javascript)  

    //Se elimina de la BD
    llamar_eliminarPoncho(ID_PHP)
}

//************************************************************************************************
function eliminarUltimaObra(ID_Javascript, ID_PHP){

    //Se obtiene el elemento a eliminar
    // elementoEliminar = document.getElementById(ID_Javascript) 
    console.log("div a eliminar", ID_Javascript)

    // Se obtiene el elemento padre donde se encuentra el poncho donde se hizo click
    elementoPadre = ID_Javascript.parentElement
    console.log("elemento padre", elementoPadre)

    //Se elimina la sección
    elementoPadre.removeChild(ID_Javascript)  

    //Se elimina de la BD
    llamar_eliminarUltimaObra(ID_PHP)
}