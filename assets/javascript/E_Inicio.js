document.addEventListener("DOMContentLoaded", function(){resize('Cont_Perfil')}, false) 

//************************************************************************************************
//Función autoejecuble que oculta el menu horizontal
// var ImagenesGaleria = (function(){ 
//     let ProfundidadImagen_2 = document.getElementById("Seccion_2")
//         let A = ProfundidadImagen_2.getBoundingClientRect().top
        
//     if(A <= 620 ){
//         document.getElementById("Header").style.display = "none" 
//     }
// })();

//************************************************************************************************
//Por medio de delegación de eventos se detectan los item del submenu para oculatrlo al hacer click
document.getElementById("MenuContenedor").addEventListener('click', function(e){
    if(e.target.classList[2] == "enlace_JS"){
        var ID_Elemento = e.target
        console.log(ID_Elemento)
        document.getElementById("MenuContenedor_3").style.visibility = "hidden"
        document.getElementById("MenuContenedor_4").style.visibility = "hidden"
    }
}, false)

//************************************************************************************************
//Por medio de delegación de eventos se detectan las pinturas para ver sus detalles
document.getElementById("Cont_galeria").addEventListener('click', function(e){
    if(e.target.classList[1] == "imagen_2--JS"){
        var ID_Pintura = e.target.id
        console.log("ID_Pintura", ID_Pintura)
        
        window.location.replace("DetallePintura_C/index/" + ID_Pintura);
    }
}, false)

//************************************************************************************************
//Por medio de delegación de eventos se detectan los ponchos para ver sus detalles
document.getElementById("Seccion_3a").addEventListener('click', function(e){
    if(e.target.classList[0] == "imagen_1"){
        var ID_Poncho = e.target.id
        console.log(ID_Poncho)
        
        window.location.replace("DetallePoncho_C/index/" + ID_Poncho);
    }
}, false)


//************************************************************************************************
//Se muestran elementos progresivamnete con efecto de animación segun se haga scroll
window.addEventListener("scroll",function(){
    //Se consulta la distancia en px desde el top de la pantalla hasta el borde inferior de cada sección
    let seccion_2 = document.getElementById("Seccion_2")
    let DistanciaBottomSeccion_2 = seccion_2.getBoundingClientRect().bottom

    let seccion_3 =  document.getElementById("Seccion_3") //PONCHOS
    let DistanciaBottomSeccion_3 = seccion_3.getBoundingClientRect().bottom
    console.log("Distancia bottom Seccion_3", DistanciaBottomSeccion_3)
    
    // let seccion_4 =  document.getElementById("Seccion_4") //
    // let DistanciaBottomSeccion_4 = seccion_4.getBoundingClientRect().bottom

    //se calcula la altura total de la seccion
    let seccion_1 = document.getElementById("Seccion_1")
    let AlturaSeccion_1 = seccion_1.offsetHeight
    let AlturaSeccion_2 = seccion_2.offsetHeight
    let AlturaSeccion_3 = seccion_3.offsetHeight
    // let AlturaSeccion_4 = seccion_4.offsetHeight

    // console.log("DistanciaBottomSeccion_1 A = ", DistanciaBottomSeccion_1)
    console.log("Altura seccion_1 = ", AlturaSeccion_1)
    console.log("Altura seccion_3 = ", AlturaSeccion_3)

    // console.log("DistanciaBottomSeccion_4 = ", DistanciaBottomSeccion_4)
    // console.log("Altura seccion_4 = ", AlturaSeccion_4)
    if(DistanciaBottomSeccion_2 < AlturaSeccion_2/2){
        document.querySelectorAll(".contenedor_2__div")[0].classList.add("contenedor_2__div--animado_1")
        // document.querySelectorAll(".contenedor_2__div")[1].classList.add("contenedor_2__div--animado_1")
        // document.querySelectorAll(".contenedor_2__div")[2].classList.add("contenedor_2__div--animado_1")
        // document.querySelectorAll(".contenedor_2__div")[3].classList.add("contenedor_2__div--animado_1")
    }
    else{
        document.querySelectorAll(".contenedor_2__div")[0].classList.remove("contenedor_2__div--animado_1")
        // document.querySelectorAll(".contenedor_2__div")[1].classList.remove("contenedor_2__div--animado_1")
        // document.querySelectorAll(".contenedor_2__div")[2].classList.remove("contenedor_2__div--animado_1")
        // document.querySelectorAll(".contenedor_2__div")[3].classList.remove("contenedor_2__div--animado_1")
    }
    if(DistanciaBottomSeccion_3 <  AlturaSeccion_3/3){   
        // document.getElementById("Seccion_5a").classList.add("contenedor_4-flex--animado")
    }
    else{     
        // document.getElementById("Seccion_5a").classList.remove("contenedor_4-flex--animado")
    }
    // if(DistanciaBottomSeccion_4 <  AlturaSeccion_4/1.4){   
    //     document.getElementById("Seccion_5a").classList.add("contenedor_4__div--animado")
    // }
    // else{   
    //     document.getElementById("Seccion_5a").classList.remove("contenedor_4__div--animado")
    // }
})

//************************************************************************************************ 
//ajusta la altura de un texarea con respecto al contenido que trae de la BD
function resize(id){
    console.log("_____ Desde resize _____", id)
    let text = document.getElementById(id);
    text.style.height = 'auto';
    text.style.height = text.scrollHeight + 'px';
}

//************************************************************************************************
