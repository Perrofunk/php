<?php

    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];

    if ($valorA==$valorB){
        echo "los valores son iguales";
        if ($valorA<$valorB) {
            echo "valor A es mayor a B";
        }
    }
    else {
        echo "los valores no son iguales";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="9_if_anidados.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>