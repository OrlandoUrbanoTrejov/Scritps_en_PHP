<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 */
/* Ejercicio:
 * Solicita al usuario el numero de alumnos en un salon, posteriormente pida la edad de cada uno de ellos y calcula su promedio de edad*/
$suma = 0; $promedio = 0;
echo "Numero de alumnos en su salon: ";
$alumnos = intval(readline());
for($i = 1; $i <= $alumnos; $i++){
	echo "Edad del alumno ".$i.": ";
	$edad = floatval(readline());
	$suma += $edad; 
}
$promedio = $suma / $alumnos;
echo "El promedio de los alumnos de:".$promedio."\n";

?>
