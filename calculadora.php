<?php
//variables de inicio
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

//variable de proceso
$suma = $n1 + $n2;
$resta = $n1 - $n2;
$multi = $n1 * $n2;
$div = $n1 / $n2;

//salidas en Pantalla
echo "Recibiendo datos... <br>";
echo "Resultado de la Suma: $suma <br>";
echo "Resultado de la Resta: $resta <br>";
echo "Resultado de la Multiplicacion: $multi <br>";
echo "Resultado de la Division: $div <br>";
?>