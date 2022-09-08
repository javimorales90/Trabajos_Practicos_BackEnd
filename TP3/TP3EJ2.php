<?php

/* 

Realizar la multiplicación de dos números enteros A y B mediante sumas sucesivas, hacer tres
algoritmos con cada estructura repetitiva.

*/

// 6*4 = 6+6+6+6 = 4+4+4+4+4+4

// A*B = A+A+A+A = B+B+B+B

$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");


/*¨// PRIMERA OPCION
$acumuladora = 0;
$contadora = 0;

if ($B<0)  {
    $B *= -1; // $B = $B * -1;
    $A *= -1; // $A = $A * -1;

}

while ($contadora < $B) {
    $acumuladora += $A; // $acumuladora = $acumuladora + $A;
    $contadora++; // $contadora = $contadora + 1;

} 
echo "$A * $B = $acumuladora";

*/


 // SEGUNDA OPCION

 if ($B<0)  {
    $B *= -1; // $B = $B * -1;
    $A *= -1; // $A = $A * -1;

}

for ($acumuladora = 0, $contadora = 0 ; $contadora < $B; $contadora++){
    $acumuladora += $A; // $acumuladora = $acumuladora + $A;
    
} 
echo "$A x $B = $acumuladora";

