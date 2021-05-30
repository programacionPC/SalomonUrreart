// document.addEventListener("keydown", contar, false);
// document.addEventListener("keyup", contar, false);
// document.addEventListener("keydown", valida_Longitud, false);
// document.addEventListener("keyup", valida_Longitud, false);

// document.querySelector('textarea').addEventListener('keydown', autosize);
document.getElementById('Watercolor').addEventListener('click', mostrarGaleria);
document.getElementById('Icono_3').addEventListener('click', mostrarMenu);
// document.getElementById("Nombre").addEventListener('click', function(){blanquearInput('Nombre')})
// document.getElementById("Nombre").addEventListener('keydown', function(){blanquearInput('Nombre')})
// document.getElementById("Correo").addEventListener('click', function(){blanquearInput('Correo')})
// document.getElementById("Correo").addEventListener('keydown', function(){blanquearInput('Correo')})
// document.getElementById("Contenido").addEventListener('click', function(){blanquearInput('Contenido')})
// document.getElementById("Contenido").addEventListener('keydown', function(){blanquearInput('Contenido')})

//************************************************************************************************

//Función autoejecuble que muestra los proyectos
// var ImagenesGaleria = (function(){ 
// })();



//************************************************************************************************
//Se cambia el color de la cinta del menu principal solo en resolucion mayor a 1024px
if(screen.width > 1024){ 
    window.addEventListener("scroll",function(){
        //Se consulta la distancia en px desde el top de la pantalla hasta el borde superior de cada sección
        let ProfundidadImagen_2 = document.getElementById("Seccion_2")
        let A = ProfundidadImagen_2.getBoundingClientRect().top
        // console.log("A= ", A)

        let ProfundidadImagen_3 = document.getElementById("Seccion_3")
        let B = ProfundidadImagen_3.getBoundingClientRect().top
        // console.log("B= ", B)

        let ProfundidadImagen_4 = document.getElementById("Seccion_4")
        let C = ProfundidadImagen_4.getBoundingClientRect().top
        // console.log("C= ", C)
        
        let ProfundidadImagen_5 = document.getElementById("Seccion_5")
        let D = ProfundidadImagen_5.getBoundingClientRect().top
        // console.log("D= ", D)
        
            
        if(A < 55 && B > 55){//55 es la altura del header  
            document.getElementById("Header").style.backgroundColor = "rgb(11, 83, 69)" 
            document.getElementById("Header").style.borderBottomColor = "rgb(11, 7, 42)"
            document.getElementById("Header").style.borderBottomStyle = "solid"
            document.getElementById("Header").style.borderBottomWidth = "1px"
            document.getElementById("Header").style.transitionDuration = "2s"
            let enlacesMenu = document.querySelectorAll("li a.header__a")
            for(let i = 0; i < enlacesMenu.length; i++){
                enlacesMenu[i].style.color = "white"
            }
        }
        else if(B < 55 && C > 55){   
            document.getElementById("Header").style.backgroundColor = "rgb(0, 0, 51)" 
            document.getElementById("Header").style.borderBottomColor = "rgb(11, 7, 42)"
            document.getElementById("Header").style.borderBottomStyle = "solid"
            document.getElementById("Header").style.borderBottomWidth = "1px"
            document.getElementById("Header").style.transitionDuration = "2s"
            let enlacesMenu = document.querySelectorAll("li a.header__a")
            for(let i = 0; i < enlacesMenu.length; i++){
                enlacesMenu[i].style.color = "white"
            }
        }
        else if(C < 55 && D > 55){          
            document.getElementById("Header").style.backgroundColor = "rgb(110, 44, 0)" 
            document.getElementById("Header").style.borderBottomColor = "rgb(11, 7, 42)"
            document.getElementById("Header").style.borderBottomStyle = "solid"
            document.getElementById("Header").style.borderBottomWidth = "1px"
            document.getElementById("Header").style.transitionDuration = "2s"
            let enlacesMenu = document.querySelectorAll("li a.header__a")
            for(let i = 0; i < enlacesMenu.length; i++){
                enlacesMenu[i].style.color = "white"
            }
        }
        else if(D < 55){           
            document.getElementById("Header").style.backgroundColor = "rgb(51, 0, 0)" 
            document.getElementById("Header").style.borderBottomColor = "rgb(11, 7, 42)"
            document.getElementById("Header").style.borderBottomStyle = "solid"
            document.getElementById("Header").style.borderBottomWidth = "1px"
            document.getElementById("Header").style.transitionDuration = "2s"
            let enlacesMenu = document.querySelectorAll("li a.header__a")
            for(let i = 0; i < enlacesMenu.length; i++){
                enlacesMenu[i].style.color = "white"
            }
        }
        else{
            document.getElementById("Header").style.backgroundColor = "initial" //color superior
            document.getElementById("Header").style.borderBottomColor = "transparent "
            let enlacesMenu = document.querySelectorAll("li a.header__a")
            for(let i = 0; i < enlacesMenu.length; i++){
                enlacesMenu[i].style.color = "white"
            }
        }  
    })
}//Se cambia el color del icono hamburguesa del menu principal solo en resolucion menores a 800px
else if(screen.width < 1024){ 
    window.addEventListener("scroll",function(){
        //Se consulta la distancia en px desde el top de la pantalla hasta el borde superior de cada sección
        let ProfundidadImagen_2 = document.getElementById("Seccion_2")
        let A = ProfundidadImagen_2.getBoundingClientRect().top
        // console.log("A= ", A)

        let ProfundidadImagen_3 = document.getElementById("Seccion_3")
        let B = ProfundidadImagen_3.getBoundingClientRect().top
        // console.log("B= ", B)

        let ProfundidadImagen_4 = document.getElementById("Seccion_4")
        let C = ProfundidadImagen_4.getBoundingClientRect().top
        // console.log("C= ", C)
        
        let ProfundidadImagen_5 = document.getElementById("Seccion_5")
        let D = ProfundidadImagen_5.getBoundingClientRect().top
        // console.log("D= ", D)
            
        if(A < 55 && B > 55){
            document.getElementById("Header").style.backgroundColor = "rgb(11, 83, 69)"            
            document.getElementById("Header").style.transitionDuration = "2s"
        }
        else if(B < 55 && C > 55){   
            document.getElementById("Header").style.backgroundColor = "rgb(0, 0, 51)"          
            document.getElementById("Header").style.transitionDuration = "2s"
        }
        else if(C < 55 && D > 55){          
            document.getElementById("Header").style.backgroundColor = "rgb(110, 44, 0)"         
            document.getElementById("Header").style.transitionDuration = "2s"
        }
        else if(D < 55){           
            document.getElementById("Header").style.backgroundColor = "rgb(51, 0, 0)"          
            document.getElementById("Header").style.transitionDuration = "2s"
        }
        else{
            document.getElementById("Header").style.backgroundColor = "initial"         
            document.getElementById("Header").style.transitionDuration = "2s"
        }  
    })
}
//************************************************************************************************
//Se muestra elementos de la seccion galeria segun se haga scroll
window.addEventListener("scroll",function(){
    //Se consulta la distancia en px desde el top de la pantalla hasta el borde inferior de cada sección
    let seccion_1 = document.getElementById("Seccion_1")
    let DistanciaBottomSeccion_1 = seccion_1.getBoundingClientRect().bottom

    let seccion_2 =  document.getElementById("Seccion_2")
    let DistanciaBottomSeccion_2 = seccion_2.getBoundingClientRect().bottom
    // console.log(DistanciaBottomSeccion_2)
    
    //se calcula la altura total de la seccion
    let AlturaSeccion_1 = seccion_1.offsetHeight
    let AlturaSeccion_2 = seccion_2.offsetHeight


    // console.log("DistanciaBottomSeccion_1 A = ", DistanciaBottomSeccion_1)
    // console.log("Altura seccion_1 = ", AlturaSeccion_1)

    // let seccion_2 = document.getElementById("Seccion_2")
    // let B = seccion_2.getBoundingClientRect().top
    // console.log("Distancia B = ", B )
    // console.log("Distancia B/2 = ",  B/2)

    // let seccion_4 = document.getElementById("Estudios")
    // let C = seccion_4.getBoundingClientRect().top
    // console.log("C= ", C)
    
    // let seccion_5 = document.getElementById("Contacto")
    // let D = seccion_5.getBoundingClientRect().top
    // console.log("D= ", D)
    // console.log(document.querySelectorAll(".contenedor_2__div"))
    if(DistanciaBottomSeccion_1 < AlturaSeccion_1/2){
        document.querySelectorAll(".contenedor_2__div")[0].classList.add("contenedor_2__div--animado_1")
        document.querySelectorAll(".contenedor_2__div")[1].classList.add("contenedor_2__div--animado_1")
        document.querySelectorAll(".contenedor_2__div")[2].classList.add("contenedor_2__div--animado_1")
        document.querySelectorAll(".contenedor_2__div")[3].classList.add("contenedor_2__div--animado_1")
    }
    else{
        document.querySelectorAll(".contenedor_2__div")[0].classList.remove("contenedor_2__div--animado_1")
        document.querySelectorAll(".contenedor_2__div")[1].classList.remove("contenedor_2__div--animado_1")
        document.querySelectorAll(".contenedor_2__div")[2].classList.remove("contenedor_2__div--animado_1")
        document.querySelectorAll(".contenedor_2__div")[3].classList.remove("contenedor_2__div--animado_1")
    }
    if(DistanciaBottomSeccion_2 <  AlturaSeccion_2/1.4){   
        document.querySelectorAll(".js")[0].classList.add("contenedor_2__div--animado_2")
        document.querySelectorAll(".js")[1].classList.add("contenedor_2__div--animado_2")
        document.querySelectorAll(".js")[2].classList.add("contenedor_2__div--animado_2")
    }
    else{   
        document.querySelectorAll(".js")[0].classList.remove("contenedor_2__div--animado_2")
        document.querySelectorAll(".js")[1].classList.remove("contenedor_2__div--animado_2")
        document.querySelectorAll(".js")[2].classList.remove("contenedor_2__div--animado_2")
    }
    // else if(C < 55 && D > 55){          
    //     document.getElementById("Header").style.backgroundColor = "plum" 
    //     document.getElementById("Header").style.borderBottomColor = "rgb(11, 7, 42)"
    //     document.getElementById("Header").style.borderBottomStyle = "solid"
    //     document.getElementById("Header").style.borderBottomWidth = "1px"
    //     document.getElementById("Header").style.transitionDuration = "2s"
    //     let enlacesMenu = document.querySelectorAll("li a.a_3")
    //     for(let i = 0; i < enlacesMenu.length; i++){
    //         enlacesMenu[i].style.color = "white"
    //     }
    // }
    // else if(D < 55){           
    //     document.getElementById("Header").style.backgroundColor = "rgb(240, 212, 202)" 
    //     document.getElementById("Header").style.borderBottomColor = "rgb(11, 7, 42)"
    //     document.getElementById("Header").style.borderBottomStyle = "solid"
    //     document.getElementById("Header").style.borderBottomWidth = "1px"
    //     document.getElementById("Header").style.transitionDuration = "2s"
    //     let enlacesMenu = document.querySelectorAll("li a.a_3")
    //     for(let i = 0; i < enlacesMenu.length; i++){
    //         enlacesMenu[i].style.color = "white"
    //     }
    // }
    // else{
    //     document.getElementById("Header").style.backgroundColor = "rgb(11, 7, 42)" //color superior
    //     let enlacesMenu = document.querySelectorAll("li a.a_3")
    //     for(let i = 0; i < enlacesMenu.length; i++){
    //         enlacesMenu[i].style.color = "white"
    //     }
    // }  
})

//************************************************************************************************
//Oculta el menu principal en responsive haciendo click por fuera del boton menu
let div = document.getElementById("MenuResponsive")
let span = document.getElementById("Span_6")

window.addEventListener("click", function(e){
    //obtiendo informacion del DOM del elemento donde se hizo click 
    var click = e.target
    console.log(click)
    AltoVitrina = document.body.scrollHeight
    if((div.style.marginLeft == "30%") && (click != div) && (click != span)){
        console.log("ENTRAMOS")
        div.style.marginLeft = "100%"
        //Se detiene la propagación de los eventos en caso de hacer click en un elemento que contenga algun evento
        e.stopPropagation();
    }
}, true)

// //************************************************************************************************
//Muestra el menu principal en formato movil y tablet  
function mostrarMenu(){  
    let A = document.getElementById("MenuResponsive")

    if(A.style.marginLeft != "30%"){//Se muestra el menu
        console.log("ENTRA AL If")
        A.style.marginLeft = "30%"
    }
    else if(A.style.marginLeft == "30%"){//Se oculta el menu
        console.log("ENTRA AL ELSE")
        A.style.marginLeft = "100%"
    }
}

// //************************************************************************************************
// //Voltea la tarjeta para mostrar el reverso
// document.getElementById('Section_1').addEventListener('click', function(e){ 
//     if(e.target.classList[2] == 'VerMas_JS'){  
//         let Tarjeta = e.target
        
//         //Se obtiene el elemento padre donde se realizó click
//         let current_1 = Tarjeta.parentElement
//         let current_2 = current_1.parentElement

//         document.getElementById(current_2.id).style.transform = "rotateY(180deg)" //Gira la tarjeta
//         document.getElementById(current_2.id).style.transformStyle = "preserve-3d" //Voltae para poder leer el lado de atras cuando se pase al frente
//         document.getElementById(current_2.id).style.transition = ".5s ease" 
//         document.getElementById(current_2.id).style.perspective = "600px"
//     }
// }, false)

// //************************************************************************************************
// //Voltea la tarjeta para mostrar nuevamente el frente
// document.getElementById('Section_1').addEventListener('click', function(e){ 
//     if(e.target.classList[3] == 'cerrar_JS'){  
//         let Tarjeta = e.target
        
//         //Se obtiene el elemento padre donde se realizó click
//         let current_1 = Tarjeta.parentElement
//         let current_2 = current_1.parentElement

//         document.getElementById(current_2.id).style.transform = "rotateY(0deg)" //Gira la tarjeta
//         document.getElementById(current_2.id).style.transformStyle = "preserve-3d" //Voltae para poder leer el lado de atras cuando se pase al frente
//         document.getElementById(current_2.id).style.transition = ".5s ease"
//         document.getElementById(current_2.id).style.perspective = "600px"
//     }
// }, false)

// //************************************************************************************************
//Muestra la galeria
function mostrarGaleria(e){
    // window.open(`Galeria_C/vistaAmpliada/${e.target.id}`, "ventana1", "self")
    window.open("Galeria_C", "ventana1", "self")
}