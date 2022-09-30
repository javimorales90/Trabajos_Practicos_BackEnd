<?php

// Calcular el factorial de 10 números diferentes cuyos valores se leen.


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