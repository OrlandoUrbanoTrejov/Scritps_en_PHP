<?php
/* Autor: Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando7@gmail.com
 */
/* Ejercicio:
 * Se desea saber el total de una caja registradora de un almacén, se conoce el numero de billetes y 
 * monedas asi como su valor
 */

$dinero = array(1000, 500, 200, 100, 50, 20, 5, 2, 1, .50, .20, .10);
for($i = 0; $i < count($dinero); $i++){
$resultado = 0;
	echo "Cantidad de dinero que tiene ".$dinero[$i]."\n";
	$convertidor = readline();
	$resultado = $resultado + ($convertidor * $dinero[$i]);
	echo "Total almacenado: $".$resultado."\n"; 
}
?>
