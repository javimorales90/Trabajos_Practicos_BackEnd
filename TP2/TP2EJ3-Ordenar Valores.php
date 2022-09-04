<?php

/*
Ordenar en forma creciente tres valores diferentes A, B, C.
*/

$A = readline("Ingrese Número A: ");
$B = readline("Ingrese Número B: ");
$C = readline("Ingrese Número C: ");

if ($A >= $B && $B >= $C) {
    echo "$C , $B , $A";
} elseif ($B >= $A && $A>=$C) {
    echo "$C , $A , $B";
} elseif ($C >= $A && $A>=$B) {
    echo "$B , $A , $C";
} elseif ($B >= $C && $C>=$A) {
    echo "$A , $C , $B";
} elseif ($A >= $C && $C<=$B) {
    echo "$B , $C , $A";
} else  { //($C >= $B && $B>=$A)
    echo "$A , $B , $C";
}

?>