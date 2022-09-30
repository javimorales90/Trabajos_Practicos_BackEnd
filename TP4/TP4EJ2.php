<?php

/*

Básicamente el mismo ejercicio anterior, pero esta vez, debe hacerlo utilizando un procedimiento el cual 
toma un tercer argumento y coloca el resultado de la suma en dicho parámetro.

*/

function suma2 ($a,$b){
    return $a+$b;
};

function suma3 ($a,$b,$c){
  return suma2($a,$b)+$c;
};

$nro1 = readline("Ingrese el primer número: ");
$nro2 = readline("Ingrese el segundo número: ");
$nro3 = readline("Ingrese el tercer número: ");
$suma = suma3($nro1,$nro2,$nro3);
echo "El resultado de la suma de $nro1 + $nro2 + $nro3 es: $suma";
