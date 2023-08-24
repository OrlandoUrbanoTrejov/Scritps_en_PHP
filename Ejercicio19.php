<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Calcular el nuevo salario de un empleado si se le descuenta el 20% de su salario actual */

echo "Nombre del empleado: ";
$nombre = readline();
echo "Salari0: ";
$salario = readline();
$total = $salario - ($salario * 0.29);
echo "Empleado ".$nombre." su salario es de: $".$total."\n";
?>
