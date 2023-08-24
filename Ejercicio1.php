<?php
/* Autor: Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Realice un algoritmo que, con base en una calificacion proporcionada (0-10), inidique con letra la calificacion que le corresponde:
  * 10 es "A", 9 es "B", 8 es "C", 7 y 6 son "D", y de 5 a 0 son "F".
 * Represente el diagrama de flujo, el pseudocodigo correspondiente */

echo "Ingresa la calificacion obtenida (0-10): ";
$calificacion = readline();
switch($calificacion){	
	case 0:
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
	echo "Tu calificacion es: F"."\n";
	break;
	case 6:
	case 7:
	echo "Tu calificacion es: D"."\n";
	break;
	case 8:   
	echo "Tu calificacion es: C"."\n";
	break;
	case 9:
	echo "Tu calificacion es: B"."\n";
    break;
    case 10:
	echo "Tu calificacion es: A"."\n";
	break;
}






