<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Un vendedor recibe un sueldo base más un 10% por comision de sus ventas el vendedor desea
saber cuanto dinero obtendra por concepto de comisiones por las 3 ventas que realiza en el mes 
y el total que recibira en el mes tomando en cunta su base y comisiones */

$comision = 0; $total = 0;

echo "Sueldo fijo: ";
$sueldo = floatval(readline());

echo "Ventas realizadas: ";
$ventas = intval(readline());

for ($i = 1; $i <= $ventas; $i++) {
    echo "Precio de la venta " . $i . ": ";
    $precio = floatval(readline());
    $comision += $precio * 0.10; 
}

$total = $comision + $sueldo;

echo "Comision: $" . number_format($comision, 2, '.', '') . "\n";
echo "Sueldo total: $" . number_format($total, 2, '.', '') . "\n";
?>

