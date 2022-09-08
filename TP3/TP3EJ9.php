<?php

/*
Imprimir los números de 1 a N (siendo N un número que se lee) cada uno con su respectivo factorial.
*/


// 9! = 1x2x3...x8x9
// 9! = 9x8x7...x2x1
// N! = Nx(N-1)*(N-2)...x2x1
// N! = Nx(N-1)!


$N = readline("Ingrese el valor de N: ");
$acumuladora =1;
for ($i=1; $i<=$N; $i++){
    $acumuladora *= $i;
        //1x1
        //1x2
        //2x3
        //6x4
        //24x5
}

echo "$i! = $acumuladora". PHP_EOL;
