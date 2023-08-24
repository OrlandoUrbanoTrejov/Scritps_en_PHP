<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-07-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Realiza un codigo que calcule la mitad de la tercera parte del doble de un numero */
$r1 = 0; $r2 = 0; $r3 = 0;
echo "Ingresa un numero: ";
$numero = floatval(readline());
$r1 = ($numero * 2);
$r2 = ($r1 / 3);
$r3 = ($r2 / 2);
echo "La mitad de la tercera parte de ".$numero." es: ".$r3."\n";
?>
