<?php
    if($_POST){
        $minutos=$_POST['minutos'];
        $iva=($minutos*10.5)/100;
        define("PRECIO", 90);
        define("MAS_MIN", 120);
        $total=($minutos*PRECIO)+($iva*PRECIO);
        $total4=($minutos*MAS_MIN)+($iva*MAS_MIN);
        echo "la llamada sale $ " .PRECIO." el minuto, y pasando los 3 minutos cuesta $ ".MAS_MIN."<br>";
        if($minutos>3){
            echo "La llamada duro ".$minutos. " minutos"."<br> La llamada sale $".$total4;
        }else {
            echo "La llamada duro ".$minutos."<br> La llamada sale ".$total;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llamadas</title>
</head>
<body>
<form action="_self" method="post">
        Minutos de llamada:
        <input type="text" name="minutos" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>