<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Escriba un algoritmo que dada la cantidad de monedas de 5-10-20 pesos, diga la cantidad de dinero que se tiene en total */
$cajero = array(1000, 500, 200, 100, 50, 20, 10, 5, 2, 1, 0.50);
$cantidad = 0;
for($i = 0; $i < count($cajero); $i++){
	echo "Cantidad de ".$cajero[$i]." que tienes: ";
	$c = readline();
	$cantidad += +($c * $cajero[$i]);
	echo "Total = $".$cantidad."\n"; 
}



?>
