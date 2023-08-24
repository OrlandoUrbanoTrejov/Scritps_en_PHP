<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Se requiere determinar el costo que tendra que realizar una llamada telefonica con base en el tiempo que dura la llamada
 * y el costo por minuto */

echo "Tiempo de la llamada en minutos: ";
$tiempo = readline();
echo "Costo por minuto en pesos: ";
$costo = readline();
$total = $tiempo * $costo;
echo "Costo de la llamda = $".$total."\n";
