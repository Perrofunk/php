<?php

    if ($_POST) {

        $valorA=$_POST['num1'];
        $valorB=$_POST['num2'];

        switch (true) {
            case ($suma>0):
                echo " la suma es positiva";
                break;
            case ($suma<0):
                echo " la suma es negativa";
                break;
            default:
                echo "la suma es nula";
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
    <input type="text" name="num1">
    <input type="text" name="num2">
    <input type="button" value="calcular">
</body>
</html>