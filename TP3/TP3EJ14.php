<?php

/*Leer 10 valores desde teclado y mostrar la media de los pares y la media de los impares.
 Hacer tres versiones, con un bucle: para, mientras y repetir.
 Repetir el ejercicio considerando que el número de valores se le solicita al usuario.
*/


$acuPares=0;
$acuImpares=0;
$contadorPares=0;
$contadorImpares=0;

for($i=0;$i<10;$i++){
    $N= readline("Ingrese el valor de N: ");
        if($N%2==0){
            $acuPares+=$N;
            $contadorPares++;
        } else
            $acuImpares+=$N;
            $contadorImpares++;
}

echo "El promedio de los vales pares es =" . $acuPares/$contadorPares . PHP_EOL;
echo "El promedio de los vales Impares es =" . $acuImpares/$contadorImpares;




