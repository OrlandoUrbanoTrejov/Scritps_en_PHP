<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio: 
 * Una persona recibe un prestamo de 10,000 de un banco y desea saber cuanto pagara de interes, si el banco le cobrara una tasa de 27% anual */

$prestamo = 1000;
echo "Año en el que solicitaste el prestamo: ";
$anio = readline();
echo "Año actual: ";
$actual = readline();
for($i = $anio; $i<= $actual; $i++){
	$prestamo = $prestamo+ ($prestamo * 0.27);
	echo "El interes de ".$i. " es de: $".$prestamo."\n";
}
 
