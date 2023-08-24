<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 11:07:2023
 * Correo: urbanoorlando79@gmail.com
 */
/* Ejercicio: 
 * Realice un algoritmo que determine el sueldo semanal de N trabajadores considerando que se les descuenta
 * 5% de su sueldo si ganan entre 0 y 150 pesos. Se les descuenta 7% si ganan mas de 150 pero menos de 300, y 
 * 9% si ganan mas de 300 pero menos de 450. Los datos son horas trabajadas, sueldo por hora, y nombre de cada trabajador */
echo "Numero de trabajadores: ";
$trabajador = readline();
$sueldo = 0; $nuevo_salario = 0; 
for($i = 1; $i <= $trabajador; $i++){
	echo "Nombre del trabajador ".$i."\n";
	$nombre = readline();
	echo "Horas trabajadas: ";
	$horas = readline();
	echo "Sueldo por hora: ";
	$salario = readline();
	$sueldo = $horas * $salario;

	if($salario >= 0 and $salario <= 150){
		$nuevo_salario = $sueldo * 0.5;
	}
	else if($salario > 150 and $salario <= 300){
		$nuevo_salario = $sueldo * 0.7;
	}
	else if($salario > 300 and $salario <= 450){
		$nuevo_salario = $sueldo * 0.9;
	}
	else {
		$nuevo_salario = 0;
	}
}
$total = $sueldo - $nuevo_salario;
echo "Trabajador: ".$nombre."\n";
echo "Salario final: ".$total."\n";


