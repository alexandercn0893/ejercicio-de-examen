<!DOCTYPE html>
<html>
<head>
	<title>Resultados de Vehiculos</title>
      <!--Estilos para que se vea la table mejor visible-->
      <style>
        table {
            border-collapse: collapse;
            border-spacing: 10px;
        }
        th, td {
            padding: 5px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
	<h1>Resultado de vehiculos</h1>
	<table>
		<tr>
			<th>Marca</th>
			<th>Color</th>
			<th>Capacidad</th>
		</tr>
		<script>
            //Declaramos el arreglo.
			let vehiculo = [
				{"color": "rojo","marca": "bmw","capacidad": 11},
				{"color": "azul","marca": "fiat","capacidad": 2},
				{"color": "negro","marca": "hyundai","capacidad": 6},
				{"color": "amarillo","marca": "jeep","capacidad": 15},
				{"color": "azul","marca": "citroen","capacidad": 20},
				{"color": "azul","marca": "renault","capacidad": 12},
				{"color": "rojo","marca": "ford","capacidad": 4},
				{"color": "gris","marca": "toyota","capacidad": 8}
			];
            //la condicional de los vehiculos con capacidad mayor a 10 y de color azul
			let resultado = vehiculo.filter(function(datos) {
				return datos.color === "azul" && datos.capacidad > 10;
			});

            //Resultados mostrados en una tabla
			resultado.forEach(function(datos) {
				let row = "<tr><td>" + datos.marca + "</td><td>" + datos.color + "</td><td>" + datos.capacidad + "</td></tr>";
				document.write(row);
			});
		</script>
	</table>
</body>
</html>