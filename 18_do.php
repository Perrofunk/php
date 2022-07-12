<?php
$paginaActual="Loop: DO";
include "C:\Users\SandroSanders\Documents\GitHub\sistemas-digitales\header.php";
    if ($_POST) {
    $i=1;
    do {
        echo"Numero ".$i."<br>";
        $i++;
    } while ($i <= 10);
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