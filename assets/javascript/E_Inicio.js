document.addEventListener("DOMContentLoaded", function(){resize('Cont_Perfil')}, false) 

//************************************************************************************************ 
    //ajusta la altura de un texarea con respecto al contenido que trae de la BD
    function resize(id){
        let text = document.getElementById(id);
        text.style.height = 'auto';
        text.style.height = text.scrollHeight + 'px';
    }

//************************************************************************************************