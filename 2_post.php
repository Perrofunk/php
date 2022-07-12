<?php
// se recepciona lo que se envia por el metodo post
if ($_POST) {

$nombre=$_POST['nombre'];//se guarda en la variable

echo "mi nombre" . " " .$nombre; //muestra lo que ocnteiene la variable

$apellido=$_POST['apellido'];//se guarda en la variable

echo "mi apellido" . " " .$apellido; //muestra lo que ocnteiene la variable

$edad=$_POST['edad'];//se guarda en la variable

echo "mi edad es" . " " .$edad; //muestra lo que ocnteiene la variable

$altura=$_POST['altura'];//se guarda en la variable

echo "mi altura es" . " " .$altura; //muestra lo que ocnteiene la variable
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
    <form action="post.php" method="post">
        nombre:
    <input type="text" name="nombre" id="">
    <br>
    <input type="submit" value="enviar">
<br> 
    <form action="post.php" method="post">
        apellido:
    <input type="text" name="apellido" id="">
    <br>
    <input type="submit" value="enviar">
    </form>
    <br>
    <form action="post.php" method="post">
    edad:
    <input type="number" name="edad" id="">
    <br>
    <input type="submit" value="enviar">
    <br>
    <form action="post.php" method="post">
        altura:
    <input type="number" name="altura" id="">
    <br>
    <input type="submit" value="enviar">
</body>
</html>