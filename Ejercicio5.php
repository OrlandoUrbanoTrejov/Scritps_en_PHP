<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023 
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Un vendedor a realizado N ventas y desea saber cuantas fueron por 10,000 o menos,
 * cuantas fueron por mas de 10,000 pero por menos de 20,000 y cuanto fue el monto de las ventas de cada una,
 * y el monto global, realice el algoritmo para determinar los totales. */

echo "Numero de ventas: ";
$ventas = readline();
$totalfinal = 0;
$total = 0;
for($i = 0; $i < $ventas; $i++){
	echo "Precio de la venta ".($i+1)."\n";
	$precio = readline();
	$totalfinal = $totalfinal + $precio[$i];
	if($precio[$i] < 1000){
		$total = $total + $precio[$i];	
    }
	else if($precio[$i] > 1000 and $precio[$i] < 1000){
  		$total = $total + $precio[$i];	
    }
}
echo "Total final = $".$total."\n";
