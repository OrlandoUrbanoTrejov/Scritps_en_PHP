<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Un vendedor de vestidos ofrece 3 diferentes tallas, con diferentes precios, la grande con un precio
de $500 por vestido, la mediana con un costo de $400 y la chica de $300. Selecciona la talla a comprar
y solicita el número de vestidos que desee, Posteriormente, calculo el monto final.*/

echo "----VESTIDOS----"."\n"."1) Grande $5000"."\n"."2) Mediana $400"."\n"."3) Chica $300"."\n";
$total  = 0;
echo "Elige  una marca: ";
$marca = intval(readline());
if($marca == 1){
	echo "Numero de vestidos que deseas comprar: ";
	$cantidad = floatval(readline());
	$total = $cantidad * 500;
}
else if($marca == 2){
	echo "Numero de vestidos que deseas comprar: ";
	$cantidad = floatval(readline());
	$total = $cantidad * 400;
}
else if($marca == 2){
	echo "Numero de vestidos que deseas comprar: ";
	$cantidad = floatval(readline());
	$total = $cantidad * 300;
}
echo "Monto total de la venta: $".$total."\n";
?>
