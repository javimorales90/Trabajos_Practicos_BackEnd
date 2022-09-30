<?php

/*
Ingresar el nombre del estudiante y la nota del examen final (Nota de tipo entero).
Asignar la calificación de acuerdo a las notas de la tabla, hacer el algoritmo y
ejecutar las pruebas como se nota en la figura:

10 Sobresaliente
8 - 9 Distinguido
6 - 7 Bueno
4 - 5 Suficiente
1 - 2 - 3 Insuficiente
0 Reprobado

Ana 2
Juan 0
Pedro 4
Maria 10
Jose 8
Santiago 6
*/

$Estudiante = readline("Ingrese nombre del estudiante: ");
$Nota = readline("Ingrese Nota del examen final: ");

/* NO FUNCIONA

if ($Nota = 10) {
    $Calificacion = "Sobresaliente";
} elseif ($Nota = 8 or 9) {
    $Calificacion = "Distinguido";
} elseif ($Nota = 6 or 7) {
    $Calificacion = "Bueno";
} elseif ($Nota = 4 or 5) {
    $Calificacion = "Suficiente";
} elseif ($Nota = 1 or 2 or 3) {
    $Calificacion = "Insuficiente";
} else ($Nota = 1 or 2 or 3); {
    $Calificacion = "Reprobado";
}

echo "El estudiante $Estudiante sacó $Nota y su calificación es $Calificacion";

*/




switch ($Nota) {
    case 0:
        $Calificacion = "Reprobado";
        echo "El estudiante $Estudiante sacó $Nota y su calificación es $Calificacion";
        break;
    case 1:
    case 2:
    case 3:
        $Calificacion = "Reprobado";
        echo "El estudiante $Estudiante sacó $Nota y su calificación es $Calificacion";
        break;
    case 4:
    case 5:
        $Calificacion = "Suficiente";
        echo "El estudiante $Estudiante sacó $Nota y su calificación es $Calificacion";
        break;
    case 6:
    case 7:
        $Calificacion = "Bueno";
        echo "El estudiante $Estudiante sacó $Nota y su calificación es $Calificacion";
        break;
    case 8:
    case 9:
        $Calificacion = "Distinguido";
        echo "El estudiante $Estudiante sacó $Nota y su calificación es $Calificacion";
        break;
    case 10:
        $Calificacion = "Sobresaliente";
        echo "El estudiante $Estudiante sacó $Nota y su calificación es $Calificacion";
        break;
    default:
        echo "Su examen no tiene calificación asignada";
        break;

    }




?>