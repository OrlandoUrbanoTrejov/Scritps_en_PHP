<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Realiza un codigo que imprima un arbol de navidad, de la siguiente manera. Recuerda hacer uso de ciclos*/
$espacios = 0;
$tronco = 0;

echo "Altura del arbol: ";
$altura = intval(readline());

for ($i = 1; $i <= $altura; $i++) {
    $espacios = $altura - $i;

    // Espacios en blanco
    for ($j = 1; $j <= $espacios; $j++) {
        echo " ";
    }

    // Asteriscos
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }

    echo "\n";
}

$tronco = $altura - 1;
for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= $tronco; $j++) {
        echo " ";
    }
    echo "*\n";
}
?>
