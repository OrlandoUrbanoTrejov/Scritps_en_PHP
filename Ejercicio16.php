<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 */
/* Ejercicio:
 * En un hospital existen 3 áreas: Urgencias, Pediatría y Traumatología. 
 * El presupuesto anual del hospital se reparte de la siguiente manera: 
 * Pediatría 42% y Traumatología 21% */
$urgencias = 0; $pediatria = 0; $traumatologia = 0;
echo "Presupuesto anual: ";
$presupuesto = readline();
$urgencias = $presupuesto * 0.37;
$pediatria = $presupuesto * 0.42;
$traumatologia = $presupuesto * 0.21;

echo "Presupuesto Urgencias: ".$urgencias."\n";
echo "Presupuesto Pediatria: ".$pediatria."\n";
echo "Presupuesto Traumatologia: ".$traumatologia."\n";
?>
