<?php
/* Autor:  Orlando Urbano Trejo (Lando)
 * Fecha:  23-08-2023 
 * Correo: urbanorlando79@gmail.com
 *
Ejercicio: iHaciendo uso de arreglos bidimensionales, solicita la calificación de las siguientes materias:
→ Cálculo Diferencial.
→ Fundamentos de programación.
→ Química.
→ Fundamentos de investigación.
→ Matemáticas Discretas.
→ Desarrollo Sustentable.
Recuerda que cada materia tiene 5 unidades, una vez obtenida cada calificación por unidad, calcula el promedio de cada materia. Finalmente, calcula el promedio general. */


$materias = array(
    "Cálculo Diferencial",
    "Fundamentos de Programación",
    "Química",
    "Fundamentos de investigación",
    "Matemáticas Discretas",
    "Desarrollo Sustentable"
);

$calificaciones = array();

$promedios_materias = array(0, 0, 0, 0, 0, 0);
$promedio_general = 0;

for ($i = 0; $i < 6; $i++) {
    echo "Calificaciones para " . $materias[$i] . ":\n";
    for ($j = 0; $j < 5; $j++) {
        echo "Unidad " . ($j + 1) . ": ";
        $calificaciones[$i][$j] = floatval(readline());
        $promedios_materias[$i] += $calificaciones[$i][$j];
    }
    $promedios_materias[$i] /= 5;
    $promedio_general += $promedios_materias[$i];
    echo "\n";
}

$promedio_general /= 6;

echo "Unidad 1\tUnidad 2\tUnidad 3\tUnidad 4\tUnidad 5\tPromedio\n";
for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 5; $j++) {
        // Calificaciones
        echo $calificaciones[$i][$j] . "\t\t";
    }
    echo number_format($promedios_materias[$i], 2) . "\n";
}

echo "\nPromedio general: " . number_format($promedio_general, 2) . "\n";
?>

