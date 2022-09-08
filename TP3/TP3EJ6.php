<?php

/*
Realizar la división entera a/b de dos valores enteros positivos mediante restas.
*/

$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");

// a/b = a-b-b-b while (a>=b)    SI NO SE CUANTAS VECES PUEDO LLEGAR A RESTAR B A "A" ENTONCES ME CONVIENE
// USAR WHILE

/* if ($B<0)  {
    $B *= -1; // $B = $B * -1;
    $A *= -1; // $A = $A * -1;

} */

$acumuladora = $A; // VA PERDIENDO VALOR DESDE EL VALOR $A
$contadora = 0;

while ($acumuladora >= $B) {
    $acumuladora -= $B; // $acumuladora = $acumuladora -$B 
    $contadora++;
}
echo "$A / $B = $contadora";