<?php
$paginaActual="Switch: Ejercicio 4";
include "C:\Users\SandroSanders\Documents\GitHub\sistemas-digitales\header.php";
if($_POST){
$nota1=$_POST["nota1"];
$nota2=$_POST["nota2"];
$promedio=($nota1+$nota2)/2;

switch (true) {
    case ($promedio<1):
        echo"fijate si no le erraste";
        break;
    case ($promedio<4):
        echo"aplazado";
        break;
    case ($promedio <7):
        echo"casi";
        break;
    case ($promedio<9):
        echo"capooo";
        break;
    case ($promedio<=11):
        echo"sobresaliente";
        break;
    default:
    echo"ni te anotaste en la escuela capo";
        break;
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
    <input type="text" name="nota1">
    <input type="text" name="nota2">
    <input type="button" value="calcular">
</body>
</html>