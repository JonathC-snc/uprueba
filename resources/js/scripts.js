var pais = document.querySelector('#pais');
var ciudad = document.querySelector('#ciudad');
pais.onchange = mandoPais;

function reciboCiudad(respuesta) {

  limpiar(); 
  
  var lines = respuesta.split('\n');
  for (var line = 0; line < lines.length; line++) {
    var opt = document.createElement('option');
    opt.innerHTML = lines[line];
    opt.value = lines[line];
    ciudad.appendChild(opt);
  }

}

function mandoPais() {
  var ajax = new XMLHttpRequest();
  ajax.open('GET', pais.value);
  ajax.onreadystatechange = function() {
    console.log(ajax.status, ajax.readyState, ajax.responseText);
    if (ajax.status === 200 && ajax.readyState === 4) {
      reciboCiudad(ajax.responseText);
    }
    else
      limpiar();
  }
  ajax.send();
}

function limpiar(){
while(ciudad.options.length > 0){                
    ciudad.remove(0);
  } 
}