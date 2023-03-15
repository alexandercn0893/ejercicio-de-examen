<!DOCTYPE html>
<html>
<head>
    <title>Números impares</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Números impares</h1>
    <!--Datos a mostrar a traves del arreglo declado en el script, tambien ponemos un identificador-->
    <ul id="datos"></ul>
    
    <script>
        // mostrarán los números en una etiqueta ul
        const resultado = document.getElementById("datos");
        
        // recorremos una array de los numeros entre 100 y 150
        for (let i = 101; i < 150; i += 2) {
            // Si el número es impar, se agrega al resultado.
            const impar = i % 2;
            if (impar !== 0) {
                const lista = document.createElement("li");
                lista.innerText = i;
                //los resultados se ingresar al metodo appendchild esta metodo se agrega como un nodo con los elemtos para que posterior a esto sea mostrado
                resultado.appendChild(lista);
            }
        }
    </script>
</body>
</html>
