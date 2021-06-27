
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
//Por medio de delegación de eventos se detecta click en una pintura para ver sus detalles
document.getElementById("Cont_galeria_pinturas").addEventListener('click', function(e){
    if(e.target.classList[1] == "imagen_2--JS"){
        var ID_Pintura = e.target.id
        console.log("ID_Pintura", ID_Pintura)
        
        window.location.replace("../DetallePintura_C/index/" + ID_Pintura);
    }
}, false)

//************************************************************************************************