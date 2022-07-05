<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        if ($_POST){
            $variable = str_replace(' ', '', trim($_POST['input'])) ;
            if ((preg_match('/(\d+)(?:\s*)([\+\-\*\/])(?:\s*)(\d+)/', $variable, $matches) !== FALSE)){
                $operador = $matches[2];
                switch ($operador){
                    case '+':
                        $p = $matches[1] + $matches[3];
                        break;
                    case '-':
                        $p = $matches[1] - $matches[3];
                        break;
                    case '*':
                        $p = $matches[1] * $matches[3];
                        break;
                    case '/':
                        $p = $matches[1] / $matches[3];
                        break;
                    echo $p;
                }
            }
            
    }
    ?>

    <form action="index.php" method="POST">
        <input name="input" type="text">
    </form>
    <p>
        <ul>
            <a href="/php/12-llamadas.php">Llamadas</a>
        </ul>
    </p>

</body>
</html>