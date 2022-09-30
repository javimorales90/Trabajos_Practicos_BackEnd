<?php

/*
En un hospital se ha hecho un estudio sobre los pacientes registrados durante
los últimos 10 años, con el objeto de hacer una aproximación de los costos de
internación por paciente. Se obtuvo un costo promedio diario según el tipo de
enfermedad que aqueja al paciente. La siguiente tabla expresa los costos diarios,
según el tipo de enfermedad. Construya un algoritmo que calcule e imprima el costo
total que representa un paciente.

Tipo de Enfermedad Costo/Paciente/Día
1                        125
2                        116
3                        120
4                        132
5                        138

*/


$CostoEnf1 = 125;
$CostoEnf2 = 116;
$CostoEnf3 = 120;
$CostoEnf4 = 132;
$CostoEnf5 = 138;


$Enfermedad = readline("Ingrese el Tipo de Enfermedad: ");
$CantidadDías = readline("Cantidad de días: ");



/*  NO FUNCIONA

if ($Enfermedad = 1) {
    $CostoTotal = $CostoEnf1 * $CantidadDías;
} elseif ($Enfermedad = 2) {
    $CostoTotal = $CostoEnf2 * $CantidadDías;
} elseif ($Enfermedad = 3) {
    $CostoTotal = $CostoEnf3 * $CantidadDías;
} elseif ($Enfermedad = 4) {
    $CostoTotal = $CostoEnf4 * $CantidadDías;
} else { // ($Enfermedad = "5")
    $CostoTotal = $CostoEnf5 * $CantidadDías;
}

echo " Por enfermedad $Enfermedad y la cantidad de $CantidadDías días: el Costo Total es $CostoTotal";

*/

// SI FUNCIONA


switch ($Enfermedad) {
    case 1:
        $CostoTotal = $CostoEnf1 * $CantidadDías;
        echo " Por enfermedad $Enfermedad y la cantidad de $CantidadDías días: el Costo Total es $CostoTotal";
        break;
    case 2:
        $CostoTotal = $CostoEnf2 * $CantidadDías;
        echo " Por enfermedad $Enfermedad y la cantidad de $CantidadDías días: el Costo Total es $CostoTotal";
        break;
    case 3:
        $CostoTotal = $CostoEnf3 * $CantidadDías;
        echo " Por enfermedad $Enfermedad y la cantidad de $CantidadDías días: el Costo Total es $CostoTotal";
        break;
    case 4:
        $CostoTotal = $CostoEnf4 * $CantidadDías;
        echo " Por enfermedad $Enfermedad y la cantidad de $CantidadDías días: el Costo Total es $CostoTotal";
        break;
    case 5:
        $CostoTotal = $CostoEnf5 * $CantidadDías;
        echo " Por enfermedad $Enfermedad y la cantidad de $CantidadDías días: el Costo Total es $CostoTotal";
        break;
    default:
        echo "Enfermedad inexistente. Verifique número de enfermedad.";
        break;

}

?>