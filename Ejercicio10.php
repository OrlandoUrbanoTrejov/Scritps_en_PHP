<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 */
/* Ejercicio:
 * El banco bandido de peluche desea calcular para cada uno de sus N clientes su saldo actual, su pago minimo y su pago para no generar intereses
 * Ademas quiere calcular el monto de lo que gano por concepto intereses con los clientes morosos. los datos que se conocen de cada clientes son:
 * Saldo anterior, monto de las compras que realizo y pago que deposito en el corte anterior. Para calcular el pago minimo se considera 15% del
 * saldo actual, y el pago para no generar intereses corresponde al 85% del pago actual, considerando que el saldo actual debe incluir 12% de los
 * intereses causados por no realizar el pago minimo y $200 de multa por el mismo motivo. Realice el algoritmo correspondiente. */
$pago_actual = 0; $saldo_minimo = 0; $pago_interes = 0;
echo "Numero de clientes: ";
$cliente = readline();
for($i = 1; $i <= $cliente; $i++){
	echo "Nombre del cliente: ";
	$nombre = readline();
	echo "Saldo anterior: ";
	$saldo_anterior = readline();
	echo "Ultimo deposito: ";
	$deposito = readline();
	echo "Monto por ventas: ";
	$monto_compras = readline();
	echo "Saldo actual: ";
	$saldo_actual = readline();
	
	$pago_actual = ($saldo_actual * 0.12) + 200;
	$saldo_minimo = $saldo_actual * 0.15;
	$pago_interes = $saldo_actual * 0.85;

	echo "Tu saldo actual ".$nombre."es de: $".$pago_actual."\n";
	echo "Tu pago minimo ".$nombre."es de: $".$saldo_minimo."\n";
	echo "El pago para no generar intereses ".$nombre."es de: $".$pago_interes."\n";
}

?>
