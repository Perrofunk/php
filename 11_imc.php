<?php

if($_POST){
    $peso=$_POST['peso'];
    $altura=$_POST['estatura'];
    $altura_doble=$altura*$altura;
    $imc=$peso/$altura_doble;
    $peso_ideal=24 * $altura_doble;
    $peso_a_bajar=$peso-$peso_ideal;
    $peso_por_alcanzar=$peso-$peso_a_bajar;

    if(($altura<0) || ($peso<0)){
      echo"<br>Valor invalido, intente denuevo.<br>";
      }else {
   echo "<br>Tu altura es: " .$altura. "M <br>";
   echo "<br>Tu peso es de: " .$peso. "Kg<br>";
   echo "<br>Tu IMC es de:  " .round($imc, 1). " <br> ";

  if($peso_a_bajar<0){
    echo "<br>El peso que tenes que subir para llegar a la media de IMC de 24 es " .round($peso_a_bajar*-1). "Kg <br>";
    echo "<br>Tu peso a alcanzar es " .round($peso_por_alcanzar). "Kg <br>";
  }else
  {
    echo"<br>El peso que debes bajar para alcanzar tu peso ideal es ".round($peso_a_bajar,1). "Kg <br>";
    echo "<br>Tu peso a alcanzar es " .round($peso_por_alcanzar,1). "Kg <br>";
  }
      if($imc<18.5){
      echo "<br>Tenes Bajo Peso <br>";
      }
      if(($imc>=18.5) && ($imc<=24.9)){
        echo"<br>Tenes un peso Normal <br>";
      }
      if(($imc>=25) && ($imc<=29.9)){
        echo"<br>Tenes sobrepeso <br>";
      }
      if(($imc>=30) && ($imc<=34.9)){
        echo"<br>Tenes obesidad de tipo 1 <br>";
      }
      if(($imc>=35) && ($imc<=39.9)){
        echo"<br>Tenes obesidad de tipo 2 <br>";
      }
      if($imc>=40){
        echo"<br>Tenes obesidad de tipo 3 <br>";
      }
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Calculadora de IMC</title>
  </head>
  <body>

  <div class="container-fluid">
    <p class="navbar-brand mb-0 h1 align-item-center">Calculadora de IMC</p>
  </div>
  <form class="row" action="11_imc.php" method="post">
    <br>
    <div class="col-md-6">
        <input type="text" name="peso"class="form-control" placeholder="Inserta tu peso">
    </div>
    <div class="col-md-6">
        <input type="text" name="estatura"class="form-control" placeholder="Inserta tu altura">
      </div>
      <div class="col-12">
        <button class="btn btn-outline-secondary btn-lg" type="submit" id="button-addon2">Calcular</button>
        </div>
    </form>
    <table class="table">
      <thead>
		<tr>
			<th scope="col" class="bg-muted">IMC</th>
			<th scope="col" class="bg-muted">Diagnostico</th>
		</tr>
    </thead>
    <tbody class="table table-borderless">
		<tr>
			<td class="bg-info">Menor 18,5</td>
			<td class="bg-info">Bajo Peso</td>
		</tr>
        <tr>
			<td class="bg-success">18,5-24,9</td>
			<td class="bg-success">Peso Normal</td>
		</tr>
        <tr>
			<td class="bg-warning">25-29,9</td>
			<td class="bg-warning">Sobrepeso</td>
		</tr>
        <tr>
			<td class="bg-danger">30-34.9</td>
			<td class="bg-danger">Obesidad de tipo 1</td>
		</tr>
        <tr>
			<td class="bg-danger">35-39.9</td>
			<td class="bg-danger">Obesidad de tipo 2</td>
		</tr>
        <tr>
			<td class="bg-danger">≥40</td>
			<td class="bg-danger">Obesidad de tipo 3</td>
		</tr>
    </tbody>
		</table>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>