<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 4</title>
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
<?php
        $empleados = array ("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);
// inicializamos las variables 

        $mayor_edad = 0;
        $mayor_nombre = "";
//Recorremos el array con un foreach, buscando  la edad mayor.       
 foreach ($empleados as $nombre => $edad) {
            if ($edad > $mayor_edad) {
                $mayor_edad = $edad;
                $mayor_nombre = $nombre;
            }
        }
    ?>

<table>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
        </tr>
        <tr>
            <td><?php echo $mayor_nombre ?></td>
            <td><?php echo $mayor_edad ?> años</td>
        </tr>
    </table>
</body>
</html>
