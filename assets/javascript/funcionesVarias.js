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
//Cambia el color de la cinta del menu principal solo en resolucion mayor a 1024px
if(screen.width > 1024){ 
    window.addEventListener("scroll",function(){
        //Se consulta la distancia en px desde el top de la pantalla hasta el borde superior de la seccion "SOBRE MI"
        let ProfundidadSeccion_5 = document.getElementById("Seccion_5")
        let A = ProfundidadSeccion_5.getBoundingClientRect().top

        // let ProfundidadImagen_3 = document.getElementById("Seccion_3")
        // let B = ProfundidadImagen_3.getBoundingClientRect().top

        // let ProfundidadImagen_4 = document.getElementById("Seccion_4")
        // let C = ProfundidadImagen_4.getBoundingClientRect().top
        
        // let ProfundidadImagen_5 = document.getElementById("Seccion_5")
        // let D = ProfundidadImagen_5.getBoundingClientRect().top        
            
        if(A < 50){//50 es la distancia arbitaria que se selecciono para comenzar a realizar la transsión de color
            document.getElementById("Header").style.backgroundColor = "rgb(16, 20, 23)"
        } 
        else if(A > 50){   
            document.getElementById("Header").style.backgroundColor = "initial";
        }
        // else if(C < 55 && D > 55){          
        //     document.getElementById("Header").style.backgroundColor = "rgb(110, 44, 0)" //Cuando es sobre mi
        //     document.getElementById("MenuContenedor_3").style.backgroundColor = "rgb(110, 44, 0)" 
        //     document.getElementById("MenuContenedor_4").style.backgroundColor = "rgb(110, 44, 0)" 
        //     document.getElementById("Header").style.transitionDuration = "2s"
        //     let enlacesMenu = document.querySelectorAll("li a.header__a")
        //     for(let i = 0; i < enlacesMenu.length; i++){
        //         enlacesMenu[i].style.color = "white"
        //     }
        // }
        // else if(D < 55){           
        //     document.getElementById("Header").style.backgroundColor = "rgb(51, 0, 0)" //Cuando es tienda
        //     document.getElementById("MenuContenedor_3").style.backgroundColor = "rgb(51, 0, 0)" 
        //     document.getElementById("MenuContenedor_4").style.backgroundColor = "rgb(51, 0, 0)" 
        //     // document.getElementById("Header").style.borderBottomColor = "rgb(11, 7, 42)"
        //     // document.getElementById("Header").style.borderBottomStyle = "solid"
        //     // document.getElementById("Header").style.borderBottomWidth = "1px"
        //     document.getElementById("Header").style.transitionDuration = "2s"
        //     let enlacesMenu = document.querySelectorAll("li a.header__a")
        //     for(let i = 0; i < enlacesMenu.length; i++){
        //         enlacesMenu[i].style.color = "white"
        //     }
        // }
        // else{
        //     document.getElementById("Header").style.backgroundColor = "initial" //color superior
        //     document.getElementById("MenuContenedor_3").style.backgroundColor = "initial" 
        //     document.getElementById("MenuContenedor_4").style.backgroundColor = "initial" 
        //     document.getElementById("Header").style.borderBottomColor = "transparent "
        //     let enlacesMenu = document.querySelectorAll("li a.header__a")
        //     for(let i = 0; i < enlacesMenu.length; i++){
        //         enlacesMenu[i].style.color = "white"
        //     }
        // }  
    })
}//Se cambia el color del icono hamburguesa del menu principal solo en resolucion menores a 800px
// else if(screen.width < 1024){ 
//     window.addEventListener("scroll",function(){
//         //Se consulta la distancia en px desde el top de la pantalla hasta el borde superior de cada sección
//         let ProfundidadImagen_2 = document.getElementById("Seccion_2")
//         let A = ProfundidadImagen_2.getBoundingClientRect().top

//         let ProfundidadImagen_3 = document.getElementById("Seccion_3")
//         let B = ProfundidadImagen_3.getBoundingClientRect().top

//         let ProfundidadImagen_4 = document.getElementById("Seccion_4")
//         let C = ProfundidadImagen_4.getBoundingClientRect().top
        
//         let ProfundidadImagen_5 = document.getElementById("Seccion_5")
//         let D = ProfundidadImagen_5.getBoundingClientRect().top
            
//         if(A < 55 && B > 55){
//             document.getElementById("Header").style.backgroundColor = "rgb(11, 83, 69)"            
//             document.getElementById("Header").style.transitionDuration = "2s"
//         }
//         else if(B < 55 && C > 55){   
//             document.getElementById("Header").style.backgroundColor = "rgb(0, 0, 51)"          
//             document.getElementById("Header").style.transitionDuration = "2s"
//         }
//         else if(C < 55 && D > 55){          
//             document.getElementById("Header").style.backgroundColor = "rgb(110, 44, 0)"         
//             document.getElementById("Header").style.transitionDuration = "2s"
//         }
//         else if(D < 55){           
//             document.getElementById("Header").style.backgroundColor = "rgb(51, 0, 0)"          
//             document.getElementById("Header").style.transitionDuration = "2s"
//         }
//         else{
//             document.getElementById("Header").style.backgroundColor = "initial"         
//             document.getElementById("Header").style.transitionDuration = "2s"
//         }  
//     })
// }

//************************************************************************************************
//Muestra la galeria
function mostrarGaleria(e){
    // window.open(`Galeria_C/vistaAmpliada/${e.target.id}`, "ventana1", "self")
    window.open("../Galeria_C", "ventana1", "self")
}