<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Calcula el precio de un boleto de viaje, tomando en cuenta el numero de kilometros que se van a recorrer.
 * El precio por kilometro es de $20.50 */
$precio = 20.50; $total = 0;
echo "Kilometros a recorrer: ";
$km = readline();
$total = $precio * $km; 
echo "El precio del boleto es de: $".$total."\n";

