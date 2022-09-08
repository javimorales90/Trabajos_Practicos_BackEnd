<?php

/*
Obtener el resto de la división entera a%b de dos números enteros positivos mediante restas.
*/

$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");

$acumuladora = $A; // VA PERDIENDO VALOR DESDE EL VALOR $A
$contadora = 0;

while ($acumuladora >= $B) {
    $acumuladora -= $B; // $acumuladora = $acumuladora -$B 
    $contadora++;
}
echo "El resto de $A / $B es = $acumuladora";
