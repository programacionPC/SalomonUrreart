
// document.getElementById('Icono_3').addEventListener('click', mostrarMenu);

//************************************************************************************************
    //obtiendo informacion del DOM para identificar el elemento donde se hizo click 
    // window.addEventListener("click", function(e){   
    //     var click = e.target
    //     console.log("Se hizo click en: ", click)
    // }, false)

//************************************************************************************************
//Oculta el menu principal en responsive haciendo click por fuera del boton menu
let div = document.getElementById("MenuResponsive")
let span = document.getElementById("Span_6")

window.addEventListener("click", function(e){
    //obtiendo informacion del DOM del elemento donde se hizo click 
    // var click = e.target
    // console.log(click)
    AltoVitrina = document.body.scrollHeight
    if((div.style.marginLeft == "0%")){
        div.style.marginLeft = "100%"
        // div.style.transitionDelay = "1s";
        //Se detiene la propagación de los eventos en caso de hacer click en un elemento que contenga algun evento
        e.stopPropagation();
    }
}, true)

//************************************************************************************************
//Por medio de delegación de eventos muestra los submenu del menu principal
window.addEventListener("mouseover",function(e){
    if(e.target.classList[1] == "MostrarSubMenu_JS"){
        var ID_Elemento = e.target
        console.log(ID_Elemento)
        document.getElementById("MenuContenedor_3").style.visibility = "initial"
        // document.getElementById("MenuContenedor_4").style.visibility = "initial"
    }
}, false)

//************************************************************************************************
//Muestra el menu principal en formato movil y tablet  
function mostrarMenu(){  
    let A = document.getElementById("MenuResponsive")

    if(A.style.marginLeft != "0%"){//Se muestra el menu
        A.style.marginLeft = "0%"
    }
    else if(A.style.marginLeft == "0%"){//Se oculta el menu
        A.style.marginLeft = "100%"
    }
}

// //************************************************************************************************
//Muestra la galeria
function mostrarGaleria(e){
    // window.open(`Galeria_C/vistaAmpliada/${e.target.id}`, "ventana1", "self")
    window.open("../Galeria_C", "ventana1", "self")
}