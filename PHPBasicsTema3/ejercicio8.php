<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Nivel 3</title>
</head>
<body>
    <?php
        $array = array('Venezuela','Mexico','Venezuela','Venezuela','España','USA','Canada','Argentina','Mexico','Colombia','Venezuela');
        $str = ", " . implode(", ",$array) . ",";
        $count = substr_count($str, ' Venezuela,');        
        echo $count;
    ?>
    
</body>
</html>