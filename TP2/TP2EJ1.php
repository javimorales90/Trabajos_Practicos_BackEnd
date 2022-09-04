<?php

/* 
Leer una variable N de tipo entero e informar si el numero es positivo negativo o cero
 y también si es par, impar o cero. El número cero no es ni positivo ni negativo ni par
  ni impar.
  */

  $nro = readline("Ingrese un número: ");
  if ($nro > 0) {
    echo "El número es positivo";
    } elseif    ($nro < 0) {
     echo "El número es negativo";
     } else {
        echo " El número es cero";
     }

     echo PHP_EOL;

 if ($nro % 2 == 0) {
    echo "Es par";
 } else {
    echo "Es Impar";
 }

 ?>