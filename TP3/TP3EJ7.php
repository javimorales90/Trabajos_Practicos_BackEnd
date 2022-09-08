<?php

/*
Realizar la operación de potenciación (ab), de dos valores enteros positivos, con multiplicaciones.
*/

// 2 a la 3 = 2 * 2 * 2


$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");
$acumuladora = 1;
for ($contadora = 0 ; $contadora < $B; $contadora++){
    $acumuladora *= $A; // $acumuladora = $acumuladora * $A;
    
} 
echo "$A elevado a $B = $acumuladora";