<?php
$paginaActual="Loops: Actividad";
include "C:\Users\SandroSanders\Documents\GitHub\sistemas-digitales\header.php";
    if ($_POST) {

        $mul=$_POST["valor1"];
        $limi=$_POST["valor2"];

        $i=0;
        do {
            echo $mul*$i."<br>";
            $i++;
        } while ($i <= $limi);


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
    <form method="POST" target="_self">
        <input type="text" name="valor1">
        <input type="text" name="valor2">
        <input type="submit" value="calcular">
    </form>
</body>
</html>