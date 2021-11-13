<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Nivel 2</title>
</head>
<body>
<H2>Suma de 2 numeros en PHP</H2>
<form action="" method="POST">
	<table>
	<tr>
		<td><input type="text" name="numero1"></td>
	</tr>
	<tr>
		<td><input type="text" name="numero2"></td>
	</tr>
	<tr>
		<td> <input type="submit" value="sumar"> </td>
	</tr>
</table>
    <?php
        if($_POST)
        {	
            $num1 = $_POST
            ['numero1'];
            $num2 = $_POST
            ['numero2'];
            $suma = $num1 + $num2;
            echo "La suma de ".$num1." y ".$num2." es ".$suma;            
        }
      

    ?>    
</body>
</html>