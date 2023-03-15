<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Operaciones</title>
  </head>
  <body>
    <h1>Operaciones</h1>
    <input type="number" id="dato1" placeholder="Ingrese el primer número"><br><br>
    <input type="number" id="dato2" placeholder="Ingrese el segundo número"><br><br>
    <button onclick="operaciones()">Calcular</button>
    <br><br>
    <div id="resultado">
      <p id="suma"></p>
      <p id="resta"></p>
      <p id="multiplicacion"></p>
      <p id="division"></p>
    </div>
    
     <script>
    function operaciones() {
    //Obtener los valores de los inputs 
    var dato1 = parseInt(document.getElementById("dato1").value);
    var dato2 = parseInt(document.getElementById("dato2").value);
    
    //Obtener el resultado de cada operación
    var suma = dato1 + dato2;
    var resta = dato1 - dato2;
    var multiplicacion = dato1 * dato2;
    var division = dato1 / dato2;
    
    //Mostrar los resultados en pantalla
    document.getElementById("suma").innerHTML = "Suma: " + suma;
    document.getElementById("resta").innerHTML = "Resta: " + resta;
    document.getElementById("multiplicacion").innerHTML = "Multiplicación: " + multiplicacion;
    document.getElementById("division").innerHTML = "División: " + division;
  }
     </script>
  </body>
</html>