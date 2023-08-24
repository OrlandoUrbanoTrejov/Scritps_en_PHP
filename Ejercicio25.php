<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 */
/* Ejercicio:
 * Solicita un numero al usuario y calcula su factorial */
$resultado = 1;
echo "Ingresa un numero: ";
$numero = intval(readline());
for($i = 1; $i <= $numero; $i++){
	$resultado *= $i;
}
echo "El factorial de ".$numero. " es: ".$resultado."\n";
?>
