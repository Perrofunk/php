<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llamadas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Llamadas</h1>
    <div id="form-container">
    
    <form target="_self" method="POST">
        <h3>Duracion de llamada en minutos</h3>
        <p class="input-p"><input name="minutos" class="form-input" type="number"></p>
        <p class="input-p"><input class="form-input" type="submit"></p>
    </form>
    <div id="resultado">
        <p>El <a href="https://es.wikipedia.org/wiki/Impuesto_al_valor_agregado#:~:text=El%20IVA%20(impuesto%20al%20valor,generalizado%20en%20la%20Uni%C3%B3n%20Europea." target="_blank">IVA (Impuesto al Valor Agregado)</a> aplicable es del 10,5% del monto a pagar.</p>
        
        <?php 
        if($_POST){
            
            $iva=1.105;

            $minutosLlamada=$_POST['minutos'];

            $valorPorMinuto= $minutosLlamada>4 ? 120 : 90;

            $costoTotalLlamada=$minutosLlamada*$valorPorMinuto;

            $costoTotalconImpuesto=$costoTotalLlamada * $iva;

            echo "<p>La llamada duró ".$minutosLlamada." minutos</p>";
            echo "<p>El valor por cada minuto, sin contar impuestos, es de $".$valorPorMinuto.", sumando un total de $".$costoTotalLlamada."</p>";
            echo "<p>El valor total de la llamada, luego de calcular el IVA es de $".$costoTotalconImpuesto."</p>";
        }
        ?>

    </div>
    </div>
</body>
</html>