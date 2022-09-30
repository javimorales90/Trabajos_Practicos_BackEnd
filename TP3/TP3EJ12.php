<?php

//  Leer 20 números y encontrar el mayor y el menor valor leídos.

$nro1 = readline("Ingrese el valor de nro 1: ");
$nro2 = readline("Ingrese el valor de nro 2: ");
$nro3 = readline("Ingrese el valor de nro 3: ");
$nro4 = readline("Ingrese el valor de nro 4: ");
$nro5 = readline("Ingrese el valor de nro 5: ");
$nro6 = readline("Ingrese el valor de nro 6: ");
$nro7 = readline("Ingrese el valor de nro 7: ");
$nro8 = readline("Ingrese el valor de nro 8: ");
$nro9 = readline("Ingrese el valor de nro 9: ");
$nro10 = readline("Ingrese el valor de nro 10: ");
$nro11 = readline("Ingrese el valor de nro 11: ");
$nro12 = readline("Ingrese el valor de nro 12: ");
$nro13 = readline("Ingrese el valor de nro 13: ");
$nro14 = readline("Ingrese el valor de nro 14: ");
$nro15 = readline("Ingrese el valor de nro 15: ");
$nro16 = readline("Ingrese el valor de nro 16: ");
$nro17 = readline("Ingrese el valor de nro 17: ");
$nro18 = readline("Ingrese el valor de nro 18: ");
$nro19 = readline("Ingrese el valor de nro 19: ");
$nro20 = readline("Ingrese el valor de nro 20: ");


$nros = array(
    $nro1,
    $nro2,
    $nro3,
    $nro4,
    $nro5,
    $nro6,
    $nro7,
    $nro8,
    $nro9,
    $nro10,
    $nro11,
    $nro12,
    $nro13,
    $nro14,
    $nro15,
    $nro16,
    $nro17,
    $nro18,
    $nro19,
    $nro20,
);

echo "El valor mayor es :" . max($nros) . PHP_EOL;
echo "El valor menor es :" . min($nros);
