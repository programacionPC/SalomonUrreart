document.getElementById('Icono_3').addEventListener('click', mostrarMenu);

//************************************************************************************************
    //obtiendo informacion del DOM para identificar el elemento donde se hizo click 
    // window.addEventListener("click", function(e){   
    //     var click = e.target
    //     console.log("Se hizo click en: ", click)
    // }, false)

//************************************************************************************************
//Muestra el menu principal   
function mostrarMenu(){  
    let A = document.getElementById("MenuResponsive")

    if(A.style.marginTop != "0%"){//Se muestra el menu
        A.style.marginTop = "0%"
    }
    else if(A.style.marginTop == "0%"){//Se oculta el menu
        A.style.marginTop = "-250%"
    }
}

//************************************************************************************************
//Oculta el menu principal en responsive haciendo click por fuera del boton menu
let div = document.getElementById("MenuResponsive")
let span = document.getElementById("Span_6")

window.addEventListener("click", function(e){
    //obtiendo informacion del DOM del elemento donde se hizo click 
    // var click = e.target
    // console.log(click)
    AltoVitrina = document.body.scrollHeight
    if((div.style.marginTop == "0%")){
        div.style.marginTop = "-250%"
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
//Cambia el color de la cinta del menu principal cuando llega a la sección "SOBRE EL ARTISTA"
    window.addEventListener("scroll",function(){
        //Se consulta la distancia en px desde el top de la pantalla hasta el borde superior de la seccion "SOBRE MI"
        let ProfundidadSeccion_5 = document.getElementById("Seccion_5")
        let A = ProfundidadSeccion_5.getBoundingClientRect().top     
            
        if(A < 50){//50 es la distancia arbitaria que se selecciono para comenzar a realizar la transsión de color
            document.getElementById("Header").style.backgroundColor = "rgb(16, 20, 23)"
        } 
        else if(A > 50){   
            document.getElementById("Header").style.backgroundColor = "initial";
        }
    })

//************************************************************************************************
//Invocada en icono de carrito en menu principal
function Carrito(){
    if(localStorage.getItem('ContenidoCarrito')){
        alert("Carrito cargado");
    }
    else{
        alert("Carrito vacio");
    }    
}

// funcion invocada desde el logo
function borrar(){
    localStorage.removeItem('ContenidoCarrito');
}