<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 5</title>
  
</head>
<body>
<h3> Palabra enviada: Alexander</h3>

<?php
function cantidad_caracteres ($texto_enviado){
    //strlen es una función de php para devolver los caracteres enviados, incluyendo los espacios en blancos.
    $numero_caracteres = strlen($texto_enviado);
    return $numero_caracteres;
    }

$texto_enviado = "Alexander";
$numero_caracteres = cantidad_caracteres($texto_enviado);
echo "# de caracteres es : " . $numero_caracteres;

?>
</body>
</html>
