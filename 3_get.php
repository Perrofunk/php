<?php
// se recepciona lo que se envia por el metodo post
if ($_GET) {

$nombre=$_GET['nombre'];//se guarda en la variable

echo "mi nombre" . " " .$nombre; //muestra lo que ocnteiene la variable

echo "<br>";

$apellido=$_GET['apellido'];//se guarda en la variable

echo " "."mi apellido" . " " .$apellido; //muestra lo que ocnteiene la variable

echo "<br>";

$edad=$_GET['edad'];//se guarda en la variable

echo " "."mi edad es" . " " .$edad; //muestra lo que ocnteiene la variable

echo "<br>";

$altura=$_GET['altura'];//se guarda en la variable

echo " "."mi altura es" .$altura; //muestra lo que ocnteiene la variable

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="get.php" method="get">
        nombre:
        <input type="text" name="nombre" id="">
        <br>
        <input type="submit" value="enviar">
        <br>
        <form action="get.php" method="get">
            apellido:
            <input type="text" name="apellido" id="">
            <br>
            <input type="submit" value="enviar">
        </form>
        <br>
        <form action="get.php" method="get">
            edad:
            <input type="number" name="edad" id="">
            <br>
            <input type="submit" value="enviar">
            <br>
            <form action="get.php" method="get">
                altura:
                <input type="number" name="altura" id="">
                <br>
                <input type="submit" value="enviar">

            </form>
</body>

</html>
