<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Calcular el descuento de un medicamento */

$total;
echo "Nombrei: ";
$nombre = readline();
echo "Precio del medicamento: ";
$precio = readline();
$total = $precio - ($precio * 0.35);
echo "Cliente ".$nombre. " el total a pagar es de: $".$total."\n";
?>
