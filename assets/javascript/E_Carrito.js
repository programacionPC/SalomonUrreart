//Invocada desde A_carrito_V.php
function AlmacenarObra(NombreImgPintura, NombrePintura, TecnicaPintura, MedidaPintura){
    console.log("______Desde AlmacenarObra()______", NombreImgPintura + NombrePintura + TecnicaPintura + MedidaPintura)
    
    let ContenidoCarrito = {
        NombreImg_Pintura: NombreImgPintura,
        Nombre_Pintura: NombrePintura,
        Tecnica_Pintura: TecnicaPintura,
        Medida_Pintura: MedidaPintura
    };
    // console.log(ContenidoCarrito)

    localStorage.setItem('ContenidoCarrito', 1);
    window.location.replace("../../Pinturas_C/fauna");
}