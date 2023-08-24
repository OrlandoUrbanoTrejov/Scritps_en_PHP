<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 */
/* Ejercicio:
 * Obtener la edad de una persona en meses, si se ingresa su edaden años y meses. 
 * Ejemplo: Ingresado 3 años 4 meses debe mostrar 40 meses*/
$resultado = 0;
echo "Edad: ";
$edad = readline();
echo "Meses: ";
$meses = readline();
$resultado = $resultado + ($edad * 12 ) + $meses;
echo "Edad ".$resultado." meses "."\n";
?>
