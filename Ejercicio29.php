<?php
/* Orlando Urbano Trejo (Lando)
 * Fecha: 22-08-2023
 * Correo: urbanoorlando79@gmail.com
 *
 * Ejercicio:
 * Haciendo uso de arreglos, almacena la calificación de una materia (Recuerda que son 5 unidades). Posteriormente, calcula el promedio final e imprime los resultados.*/
$calificacion = array();
$suma = 0; $promedio = 0;
echo "Materias: ";
$materia = readline();
for($i = 1; $i <= 5; $i++){
	echo "Calficacion en la unidad " .$i.": ";
	$calificacion[$i] = intval(readline());
	$suma += $calificacion[$i]; 
}
echo "Asignatura: " . $materia . "\n";
echo "Unidad 1\tUnidad 2\tUnidad 3\tUnidad 4\tUnidad 5\t Promedio\n";
for ($i = 1; $i <= 5; $i++) {
    echo $calificacion[$i] . "\t\t";
}
$promedio = $suma / 5;
echo number_format($promedio, 2) . "\n"

?>
