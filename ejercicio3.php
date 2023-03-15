<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3</title>
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
    // Array tomado de los empleados
        $empleados = [
            ["Nombre" => "Marcelo","Apellido" => "Velez","Edad" => 25,"Area" => "Administración", "Correo" => "marceloVelez@hotmail.com",],
            ["Nombre" => "Alberto","Apellido"=> "Unbertini","Edad" => 36,"Area" => "RRHH","Correo" => "albert.unbert@hotmail.com",],
            ["Nombre"=>"Isidora","Apellido" => "Gutierrez","Edad" => 33,"Area" => "Desarrollador","Correo" => "isi_gutie@gmail.cl",],
            ["Nombre" =>"Sebastian","Apellido" => "Jimenez","Edad" => 21,"Area" => "No Asignada","Correo" =>"s.jimenez@gmail.cl",],
            ["Nombre" => "Manuel","Apellido" => "Osorio","Edad" => 19,"Area" =>"Desarrollador","Correo" => "manu007@outlook.com",],
            ["Nombre" =>"Alonso","Apellido" => "Villa","Edad" => 47,"Area" => "Product Manager","Correo" =>"alvilla@hotmail.com",]
        ];
    ?>

    <table>
        <tr>
            <th>Nombre y Apellido</th>
            <th>Edad</th>
            <th>Área</th>
            <th>Correo</th>
        </tr>
        <?php
        //hacemos el recorrido para tomar encuenta la condicional de los impares
            foreach ($empleados as $impares => $empleado) {
                if ($impares % 2 == 0) { 
                    //muestra de los resultados de acuerdo a la condicional de impares.
                    echo "<tr>";
                    echo "<td>{$empleado['Nombre']} {$empleado['Apellido']}</td>";
                    echo "<td>{$empleado['Edad']}</td>";
                    echo "<td>{$empleado['Area']}</td>";
                    echo "<td>{$empleado['Correo']}</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>
