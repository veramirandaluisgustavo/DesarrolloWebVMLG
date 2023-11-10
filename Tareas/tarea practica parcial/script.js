function cargarTresEnRaya() {

  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'tresenraya.html', true);


  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById('contenido').innerHTML = xhr.responseText;
      iniciarJuego();
    }
  };

  xhr.send();
}

function iniciarJuego() {
  var turno = 'X';

  var botones = document.getElementsByClassName('boton');

  for (var i = 0; i < botones.length; i++) {
    botones[i].addEventListener('click', function () {
      if (this.innerHTML === '') {
        this.innerHTML = turno;
        turno = (turno === 'X') ? 'O' : 'X';
        document.getElementById('mensaje').innerHTML = 'Turno: ' + turno;
      } else {
        document.getElementById('mensaje').innerHTML = 'Casilla ocupada, intenta de nuevo.';
      }
    });
  }

  document.getElementById('mensaje').innerHTML = 'Turno: ' + turno;
}
function cargarContenido() {
  // Crear una instancia de XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Configurar la solicitud
  xhr.open('GET', './ejercicio2/tabla.html', true);

  // Configurar la función de devolución de llamada para manejar la respuesta
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // Actualizar el contenido del elemento con id "contenido"
      document.getElementById('contenido').innerHTML = xhr.responseText;
    }
  };

  // Enviar la solicitud
  xhr.send();
}

function botonRegistrado(dato) {
  var container;
  container = document.getElementById('historial');
  console.log("se llamo a la funcion  de un boton");
  container.innerHTML += "<div>SE LLAMO AL BOTON: " + dato + "</div>";
  switch (dato) {
    case "1": break;
    case "2":
      cargarEjercicios("../ejercicio2/ejercicio2.html", 'principal');
      break;
  }


}
function cargarEjercicios(abrir, contenedor) {
  var contenedor;
  contenedor = document.getElementById(contenedor);
  contenedor.innerHTML = "";
  var ajax = new XMLHttpRequest() //crea el objetov ajax 
  ajax.open("get", abrir, true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      console.log(ajax)
      console.log(abrir)
      console.log(contenedor)
      contenido = contenedor.innerHTML;
      contenedor.innerHTML = "";
      contenedor.innerHTML = ajax.responseText + contenido;
    }
  }
  ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
  ajax.send();


}
function restriccion(dato) {
  suma = document.getElementById("suma");
  resta = document.getElementById("resta");
  factorial = document.getElementById("factorial");

  // console.log("se ejecuta la restriccion");
  console.log(dato + suma.checked);
  switch (dato) {
    case "suma":
      console.log("se selecciono suma");
      resta.checked = false;
      factorial.checked = false;
      break;
    case "resta":
      suma.checked = false;
      factorial.checked = false;
      break;
    case "factorial":
      suma.checked = false;
      resta.checked = false;
      break;
  }


}
function calcular() {
  console.log("se llamo a calcular")
  container = document.getElementById("resultado");
  dato1 = document.getElementById("valor1");
  dato2 = document.getElementById("valor2");
  suma = document.getElementById("suma");
  resta = document.getElementById("resta");
  factorial = document.getElementById("factorial");
  var tabla;
  alto = parseInt(dato2.value);
  valor = parseInt(dato1.value);

  if (suma.checked) {
    tabla = generartabla(alto, valor, "+")

  }
  if (resta.checked) {
    tabla = generartabla(alto, valor, "-")
  }
  if (factorial.checked) {
    tabla = generartabla(alto, valor, "factorial")
  }
  container.innerHTML = tabla;

}
function generartabla(alto, valor, accion) {

  var resultado;
  var tabla = "<table style='border: 1px solid black;border-collapse: collapse;'>";
  console.log("se llamo a generar tabla");
  if (accion == "factorial") {
    console.log("entro a factorial");
    console.log("valor de alto es: " + alto);
    for (let i = 0; i < alto; i++) {
      console.log("entro al for factorial");
      indice = i + 1;
      resultado = factorialCalculo(indice);
      seccion = "<tr><td>FACTORIAL</td><td>" + indice + "</td><td>=</td><td>" + resultado + "</td></tr>";
      console.log(seccion);
      tabla = tabla + seccion;
      console.log(seccion);

    }
  }
  else {
    console.log("generar taabla");
    for (let i = 0; i < alto; i++) {
      console.log("se genera suma y resta");
      indice = i + 1;
      var resultado;
      switch (accion) {
        case "+": resultado = indice + valor; break;
        case "-": resultado = indice - valor; break;
      }
      seccion = "<tr><td>" + indice + "</td><td>" + accion + "</td><td>" + valor + "</td><td>=</td><td>" + resultado + "</td></tr>";
      tabla = tabla + seccion;
      console.log(seccion);
    }

  }
  tabla = tabla + "</tabla>";


  return tabla;
}
function factorialCalculo(n) {
  let resultado = 1;

  for (let i = 1; i <= n; i++) {
    resultado *= i;
  }

  return resultado;
}
 function cargarLogin() {
  var boton2 = document.getElementById("ej2");
  var contenido = document.getElementById("contenido");
  var tituloDiv = document.getElementById("titulo");
  var ajax = new XMLHttpRequest();

  boton2.addEventListener("click", function () {
    titulo.textContent = "Pregunta 2 DOM en Javascript";

    ajax.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        contenido.innerHTML = this.responseText;
        var dibujarButton = document.getElementById("dibujar");
        dibujarButton.addEventListener("click", function () {
          var filasInput = document.getElementById("filas");
          var columnasInput = document.getElementById("columnas");
          var filas = parseInt(filasInput.value);
          var columnas = parseInt(columnasInput.value);

          var tablaHTML = "<table>";
          for (var i = 0; i < filas; i++) {
            tablaHTML += "<tr>";
            for (var j = 0; j < columnas; j++) {
              tablaHTML += "<td></td>";
            }
            tablaHTML += "</tr>";
          }
          tablaHTML += "</table>";
          contenido.innerHTML = tablaHTML;
        });
      }
    };
    ajax.open("GET", "tabla.html", true);
    ajax.send();
  });
}

