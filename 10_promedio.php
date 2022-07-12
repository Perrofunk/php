<?php

    $Nota1=$_POST["Nota1"];
    $Nota2=$_POST["Nota2"];
    $Nota3=$_POST["Nota3"];
    $nota= ($Nota1+$Nota2+$Nota3)/3;

    /*if ($nota<=3) {
        echo "aplazado";
    }
    if (($nota>=4) && ($nota<=6)) {
    echo "reprobado";
    }
    if (($nota<=7) && ($nota>=8)) {
        echo "aprobado";
    }

    else if (($nota<=9) && ($nota>=10)) {
        echo "sobresaliente";
    }
    */
    /*
    if ($nota<=3) {
        echo "aplazado";
        if (($nota>=4) && ($nota<=6)) {
            echo "reprobado";
            if (($nota<=7) && ($nota>=8)) {
                echo "aprobado";
                if (($nota<=9) && ($nota>=10)) {
                    echo "sobresaliente";
            }
        }
    }
    }
}*/
switch ($nota) {
    case '<=3':
        echo "aplazado";
        break;
    case '<=3':
        echo "reprobado";
    case '<=3':
        echo "aprobado";
    case '<=3':
        echo "sobresaliente";
    default:
        echo "pone bien los numeros gil";
        break;
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
    <form action="10_promedio.php" method="post">
        1er Nota:
        <input type="text" name="Nota1" id="">
        <br>
        <br>
        2da Nota:
        <input type="text" name="Nota2" id="">
        <br>
        <br>
        3era Nota
        <input type="text" name="Nota3" id="">
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>