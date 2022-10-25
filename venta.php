<?php
//Programa que calcule el IVA (13%) de una venta.
$iva = 0.13;
$venta = 80;

$impuesto = $venta * $iva;
echo "Empresa INJU S.A de C.V <br>";
echo "********************************* <br>";
echo "Venta sin IVA:$ $venta <br>";
echo "IVA:$ $impuesto";
$impuestos_incluidos = $impuesto + $venta;
echo "<br> Venta total:$ $impuestos_incluidos";
echo "<br><br><hr>";
//Hacer un programa en php que muestre su nombre y edad en pantalla.
//Hacer un programa en php que calcule la edad a partir del año de nacimiento
$year = 1985;
$edad = 2022 - $year;
echo "La edad de Roberto es: $edad  años de edad.";

?>