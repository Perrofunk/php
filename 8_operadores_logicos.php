<?php
$paginaActual="Operadores Logicos";
include "C:\Users\SandroSanders\Documents\GitHub\sistemas-digitales\header.php";
if ($_POST){
    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];

    if (($valorA==$valorB) || ($valorA!=$valorB)){
        echo "los valores son valores";
    }
    else {
        echo "los valores no son iguales";
    }
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
    
    <form action="8_operadores_relacionales.php" method="post">
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