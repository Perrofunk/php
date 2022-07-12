<?php

    if ($_POST) {

        $dia=$_POST["dia"];

        switch ($dia) {
            case 1:
                echo"lunes";
            break;
            case 2:
                echo"martes";
            break;
            case 3:
                echo"miercoles";
            break;
            case 4:
                echo"jueves";
            break;
            case 5:
                echo"viernes";
            break;
            case 6:
                echo"sabado";
            break;
            case 7:
                echo"domingo";
             break;
            default:
                echo"fijate en un calendario";
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
    <input type="text" name="dia">
    <input type="button" value="que dia es??">
</body>
</html>