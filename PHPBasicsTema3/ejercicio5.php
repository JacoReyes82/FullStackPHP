<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>  
        <?php
            $arrayOne = [20, 40, 60, 80, 100];
            $arrayTwo = [15, 30, 45];
            
            // Agrego nuevo elemento
            $arrayTwo[] = 60;

            // Combino los dos arrays
            $arrayCombinado = array_merge($arrayOne, $arrayTwo);

            var_dump(count($arrayCombinado));
            echo "<br>";
            var_dump($arrayCombinado);
        ?>    
</body>
</html>