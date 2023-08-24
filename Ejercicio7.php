<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Realice un algoritmo para leer calificaciones de N alumnos y determine el numero de alumnos 
 * aprobados y reprobados */

echo "Cantidad de alumnos: ";
$alumnos = readline();
for($i = 1; $i <= $alumnos; $i++){
	echo "Calificacion del alumno ".$i.": "."\n";
	$calificacion = readline();
	if($calificacion >= 70){
	 	echo "Aprobado"."\n";
	}
	else{
		echo "Reprobado"."\n";	
    }
}

