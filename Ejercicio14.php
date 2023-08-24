<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Calcula la cantidad de euros a monedas */

echo "------MENU DE CONVERSIONES------"."\n"."1) Euros"."\n"."2) Dolares"."\n";
$dolar = 16.89; $euro = 0.0053; $total = 0;
echo "Elige una opcion: ";
$opcion = readline();
if($opcion == 1){
	echo "Dinero: ";
	$dinero = readline();
	$total = $dinero / $dolar;
	echo "Dinero: ".$total." dolares"."\n";
}
else if($opcion == 2){
	echo "Dinero: ";
	$dinero = readline();
	$total = $dinero / $euro;
	echo "Dinero: ".$total." euros"."\n";
}
?>
