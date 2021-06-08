document.getElementById('Watercolor').addEventListener('click', mostrarGaleria);
document.getElementById('Icono_3').addEventListener('click', mostrarMenu);

//************************************************************************************************
//Función autoejecuble que oculta el menu horizontal
var ImagenesGaleria = (function(){ 
    let ProfundidadImagen_2 = document.getElementById("Seccion_2")
        let A = ProfundidadImagen_2.getBoundingClientRect().top
        
    if(A <= 620 ){
        document.getElementById("Header").style.display = "none" 
    }
})();

//************************************************************************************************
//Se muestra el menu principal solo en la seccion_1 de la pagina de inicio y en resolucion mayor a 1024px
if(screen.width > 1024){ 
    let ProfundidadImagen_2 = document.getElementById("Seccion_2")
        let A = ProfundidadImagen_2.getBoundingClientRect().top
     
    window.addEventListener("scroll",function(){
        //Se consulta la distancia en px desde el top de la pantalla hasta el borde superior de cada sección
        let ProfundidadImagen_2 = document.getElementById("Seccion_2")
        let A = ProfundidadImagen_2.getBoundingClientRect().top            
         
        if(A < 55){//55 es la altura del header 
            document.getElementById("Header").style.display = "block"
            // document.getElementById("Header").style.backgroundColor = "rgb(16, 20, 23)" //Cuando es galeria
            // document.getElementById("MenuContenedor_3").style.backgroundColor = "rgb(11, 83, 69)" 
            // document.getElementById("MenuContenedor_4").style.backgroundColor = "rgb(11, 83, 69)" 
            // document.getElementById("Header").style.transitionDuration = "2s"
            // let enlacesMenu = document.querySelectorAll("li a.header__a")
            // for(let i = 0; i < enlacesMenu.length; i++){
            //     enlacesMenu[i].style.color = "white"
            // }
        } 
        // else if(B < 55 && C > 55){   
        //     document.getElementById("Header").style.backgroundColor = "rgb(0, 0, 51)" //Cuando es evento
        //     document.getElementById("MenuContenedor_3").style.backgroundColor = "rgb(0, 0, 51)" 
        //     document.getElementById("MenuContenedor_4").style.backgroundColor = "rgb(0, 0, 51)" 
        //     document.getElementById("Header").style.transitionDuration = "2s"
        //     let enlacesMenu = document.querySelectorAll("li a.header__a")
        //     for(let i = 0; i < enlacesMenu.length; i++){
        //         enlacesMenu[i].style.color = "white"
        //     }
        // }
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
        else if(A <= 620 ){
            document.getElementById("Header").style.display = "none" 
        }
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
else if(screen.width < 1024){ 
    window.addEventListener("scroll",function(){
        //Se consulta la distancia en px desde el top de la pantalla hasta el borde superior de cada sección
        let ProfundidadImagen_2 = document.getElementById("Seccion_2")
        let A = ProfundidadImagen_2.getBoundingClientRect().top

        let ProfundidadImagen_3 = document.getElementById("Seccion_3")
        let B = ProfundidadImagen_3.getBoundingClientRect().top

        let ProfundidadImagen_4 = document.getElementById("Seccion_4")
        let C = ProfundidadImagen_4.getBoundingClientRect().top
        
        let ProfundidadImagen_5 = document.getElementById("Seccion_5")
        let D = ProfundidadImagen_5.getBoundingClientRect().top
            
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
//Se muestran elementos progresivamnete con efecto de animación segun se haga scroll
window.addEventListener("scroll",function(){
    //Se consulta la distancia en px desde el top de la pantalla hasta el borde inferior de cada sección
    let seccion_2 = document.getElementById("Seccion_2")
    let DistanciaBottomSeccion_2 = seccion_2.getBoundingClientRect().bottom

    let seccion_3a =  document.getElementById("Seccion_3a")
    let DistanciaBottomSeccion_3a = seccion_3a.getBoundingClientRect().bottom
    
    let seccion_4 =  document.getElementById("Seccion_4")
    let DistanciaBottomSeccion_4 = seccion_4.getBoundingClientRect().bottom

    //se calcula la altura total de la seccion
    let AlturaSeccion_2 = seccion_2.offsetHeight
    let AlturaSeccion_3a = seccion_3a.offsetHeight
    let AlturaSeccion_4 = seccion_4.offsetHeight

    // console.log("DistanciaBottomSeccion_1 A = ", DistanciaBottomSeccion_1)
    // console.log("Altura seccion_1 = ", AlturaSeccion_1)

    // console.log("DistanciaBottomSeccion_4 = ", DistanciaBottomSeccion_4)
    // console.log("Altura seccion_4 = ", AlturaSeccion_4)
    if(DistanciaBottomSeccion_2 < AlturaSeccion_2/2){
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
    if(DistanciaBottomSeccion_3a <  AlturaSeccion_3a/1.4){   
        document.querySelectorAll(".js")[0].classList.add("contenedor_2__div--animado_2")
        document.querySelectorAll(".js")[1].classList.add("contenedor_2__div--animado_2")
        document.querySelectorAll(".js")[2].classList.add("contenedor_2__div--animado_2")
    }
    else{   
        document.querySelectorAll(".js")[0].classList.remove("contenedor_2__div--animado_2")
        document.querySelectorAll(".js")[1].classList.remove("contenedor_2__div--animado_2")
        document.querySelectorAll(".js")[2].classList.remove("contenedor_2__div--animado_2")
    }
    if(DistanciaBottomSeccion_4 <  AlturaSeccion_4/1.4){   
        document.getElementById("Seccion_5a").classList.add("contenedor_4__div--animado")
        console.log("HOLA")
    }
    else{   
        document.getElementById("Seccion_5a").classList.remove("contenedor_4__div--animado")
    }
})

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
//Por medio de delegación de eventos se detectan los item del submenu para ocultrlo al hacer click
document.getElementById("MenuContenedor").addEventListener('click', function(e){
    if(e.target.classList[2] == "enlace_JS"){
        var ID_Elemento = e.target
        console.log(ID_Elemento)
        document.getElementById("MenuContenedor_3").style.visibility = "hidden"
        document.getElementById("MenuContenedor_4").style.visibility = "hidden"
    }
}, false)

//************************************************************************************************
//Por medio de delegación de eventos muestra los submenu del menu principal
window.addEventListener("mouseover",function(e){
    if(e.target.classList[1] == "MostrarSubMenu_JS"){
        var ID_Elemento = e.target
        console.log(ID_Elemento)
        document.getElementById("MenuContenedor_3").style.visibility = "initial"
        document.getElementById("MenuContenedor_4").style.visibility = "initial"
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