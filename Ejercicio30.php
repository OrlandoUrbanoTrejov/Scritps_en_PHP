<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio: Haciendo uso de 2 arreglos, almacena 5 números en cada arreglo, posteriormente vas a multiplicar los arreglos */
$primero = array();
$segundo = array();
$multiplicacion = array();
$suma = 0;
for($i = 0; $i < 5; $i++){
	echo "Valor ".($i+1).": ";
	$primero[$i] = intval(readline());
}
echo " ";
for($i = 4; $i >= 0; $i--){
	$suma = $i + 2;
	echo "Valor ".($suma -1).": ";
	$segundo[$i] = intval(readline());
}
for($i = 0; $i <5; $i++) {
        $multiplicacion[$i] = $primero[$i] * $segundo[$i];
}
echo "Resultado: "."\n";
for($i = 0; $i < 5; $i++){
	echo "$multiplicacion[$i]"." "."\n";
}

?>
