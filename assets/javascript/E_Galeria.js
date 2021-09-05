document.getElementById('Cerrar').addEventListener('click', CerrarVentana);

//Por medio de delegación de eventos se detecta cada select debido a que son muchos elementos tipo select
document.getElementById("Cont_galeria").addEventListener('click', function(e){
    // console.log("______Desde funcion anonima que aplica listerner a elementos tipo select")
    
    window.open(`Galeria_C/vistaAmpliada/${e.target.id}`, "ventana1", "width=1300, height=650, scrollbars=YES" );        
}, false)

function CerrarVentana(){
    window.close();
}