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
//ajusta la altura de un texarea con respecto al contenido que trae de la BD
function resize(id){
    // console.log("_____ Desde resize _____", id)
    let text = document.getElementById(id);
    text.style.height = 'auto';
    text.style.height = text.scrollHeight + 'px';
}

//************************************************************************************************
