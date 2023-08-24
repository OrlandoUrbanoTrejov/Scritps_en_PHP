<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 */
/* Ejercicio: 
 * La CONAGUA requiere determinar el pago que debe de realizar a una persona por el total de metros
 * cúbicos que consume de agua */
echo "Ingrese el precio por metro: ";
$precio = readline();
echo "Metros trabajados: ";
$metros = readline();
$total = $precio * $metros;
echo "Pago = $".$total."\n";
?>

