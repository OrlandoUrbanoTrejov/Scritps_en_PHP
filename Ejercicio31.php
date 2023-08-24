<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 23-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio: En la cafetería de Tesji hay una urna con pelotas de colores. verde, roja y amarilla. Cada una aplica
un desucento diferente en el total de tu compra. La pelota verde ofrece un 10% de descuento, la
amarilla un 5% y la roja un 15%. Con base a esos datos, imprime el monto final a pagar, ya con el
descuento. */

$Pelota = 0;
$Compra = 0;
$Resultado = 0;

echo "-----CAFETERIA TESJI-----\n";
echo "1) Pelota Verde\n";
echo "2) Pelota Roja\n";
echo "3) Pelota Amarilla\n";

echo "Elige una opcion: ";
$Pelota = intval(readline());

if ($Pelota == 1) {
    echo "Descuento 10%\n";
    echo "Total de tu compra: ";
    $Compra = floatval(readline());
    $Resultado = $Compra - ($Compra * 0.10);
    echo "Monto total: $" . number_format($Resultado, 2, '.', '') . "\n";
} elseif ($Pelota == 2) {
    echo "Descuento 5%\n";
    echo "Total de tu compra: ";
    $Compra = floatval(readline());
    $Resultado = $Compra - ($Compra * 0.05);
    echo "Monto total: $" . number_format($Resultado, 2, '.', '') . "\n";
} elseif ($Pelota == 3) {
    echo "Descuento 15%\n";
    echo "Total de tu compra: ";
    $Compra = floatval(readline());
    $Resultado = $Compra - ($Compra * 0.15);
    echo "Monto total: $" . number_format($Resultado, 2, '.', '') . "\n";
} else {
    echo "Opcion no valida\n";
}
?>

