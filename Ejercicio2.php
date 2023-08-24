<?php
/* Autor: Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 */
/* Ejercicio:
 * Realice un algoritmo que calcule el precio total del boleto de una persona, ingresando el precio por kilometro y 
 * la cantidad de kilometros a recorrer. Represente el diagrama de flujo, el pseudocodigo correspondiente
 */

echo "Precio por kilometro: ";
$precio_kilometro = readline();
echo "Cantidad de kilometros a recorrer: ";
$distancia = readline();
$total = $precio_kilometro * $distancia;
echo "Precio del boleto = $".$total."\n";
?>
