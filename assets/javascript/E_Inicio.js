document.addEventListener("DOMContentLoaded", function(){resize('Cont_Perfil')}, false) 

//************************************************************************************************
//Función autoejecuble que muestra la ventana modal
var VentanaModal = (function(){ 
    setTimeout(function(){mostrarModal();}, 2000)
})();

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
//ajusta la altura de un texarea con respecto al contenido que trae de la BD
function resize(id){
    // console.log("_____ Desde resize _____", id)
    let text = document.getElementById(id);
    text.style.height = 'auto';
    text.style.height = text.scrollHeight + 'px';
}

//************************************************************************************************

function mostrarModal(){        
    document.getElementById("VentanaModal").classList.add("mostrarModal")
}

//************************************************************************************************
// Oculata la ventana modal
function ocultarModal(){
    document.getElementById("VentanaModal").classList.add("quitarModal")
}