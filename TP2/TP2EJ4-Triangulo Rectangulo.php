<?php

/*
Escribir un algoritmo que con solo ingresar los lados de un triángulo rectángulo
 le dice al usuario si es isosceles, escaleno o equilatero.

 */

$C = readline("Ingrese Lado 1: ");
$B = readline("Ingrese Lado 2: ");
$A = readline("Ingrese Lado 3: ");

 //$C = (sqrt($A**2+$B**2)); solo a modo de información, teorema de Pitagoras

 if ($C === $A && $A === $B) {
    echo "Triangulo Equilatero";
 } elseif ($C === $A && !($A === $B)) {
    echo "Triangulo Isosceles";
 } elseif ($C === $B && !($B === $A)) {
    echo "Triangulo Isosceles";
 } elseif ($B === $A && !($A === $C)) {
    echo "Triangulo Isosceles";
 } elseif (!($C === $A && $A === $B && $B === $C)) { // (!($C === $A) && !($A === $B) && !($B === $C)) // !($C === $A && $A === $B && $B === $C)
    echo "Triangulo Escaleno";
 }

 ?>
 