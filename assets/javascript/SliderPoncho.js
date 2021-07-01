
window.onload = function () {
    var tiempoPresentacion = 4000;
    mySlider('#slider', tiempoPresentacion);
}

var mySlider = function (id, time) {
  var target = document.querySelector(id)
  var childrens = target.children
  var selectedIndex = 0
  var childrensCount = childrens.length
  var timeToWait = time
  var stop = false;

  // Muestra el primer item encontrado por defecto
  childrens[selectedIndex].style.display = 'block';

    // El intervalo que hará rotar el Slider
    setInterval(transitionLogic, timeToWait);

    function transitionLogic(){
      if(!stop){
          if(selectedIndex === childrensCount - 1) {
              selectedIndex = 0;
          } 
          else{
              selectedIndex++;
          }

          for(var i = 0; i < childrensCount; i++) {
              childrens[i].style.display = 'none';
          }

          childrens[selectedIndex].style.display = 'block';
      }
  }

  // Cancela la rotación cuando el mouse esta posicionado dentro del slider
  target.addEventListener('mouseenter', function(){
      stop = true;
  });

  target.addEventListener('mouseleave', function(){
      stop = false;
  });
};