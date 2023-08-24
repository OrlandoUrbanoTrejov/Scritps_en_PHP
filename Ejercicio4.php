<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Se requiere determinar el tiempo en que tarda una persona en llegar de una ciudad a otra en bicicleta, 
 * Considerando que lleva una velocidad constante */

echo "Velocidad en (km/h): ";
$km = readline();
echo "Distancia recorridad: ";
$distancia = readline();
$total = $km * $distancia;
echo "Tiempo = ",$total. "\n";
