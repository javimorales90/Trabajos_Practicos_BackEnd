<?php

/*
Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota
negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar?

7,8,9
suma= 7+8+9
promedio= suma/cantidad

*/

/*   // PRIMERO OPCION

$nota= 0;
$cantidad= 0;
$nota = readline("Ingrese una nota o una nota negativa para salir: ");

while ($nota >=0) {
    $suma += $nota;
    $cantidad++;
    $nota = readline("Ingrese una nota o una nota negativa para salir: ");
}
    $promedio = $suma / $cantidad;
    echo "El promedio de los numeros ingresados es: $promedio";

    */



/*
 // SEGUNDA OPCION

$nota= 0;
$cantidad= 0;

do {
     $nota = readline("Ingrese una nota o una nota negativa para salir: ");
    if ($nota>=0){
        $suma += $nota; // $suma = $suma + $nota
        $cantidad++; // $cantidad = $cantidad + 1
        } 
    } while ($nota >=0);
$promedio = $suma / $cantidad;
echo "El promedio de los numeros ingresados es: $promedio";

*/


  // TERCERA OPCION

$nota= 0;
$cantidad= 0;

for ($nota = readline("Ingrese una nota : ") ; $nota>=0 ; $nota = readline("Ingrese una nota : ")) {
    $suma += $nota;
    $cantidad++;

}
if ($cantidad != 0) {
    $promedio = $suma / $cantidad; // $promedio = ($cantidad != 0) ? $suma / $cantidad ; 0
}
    echo "El promedio de los numeros ingresados es: $promedio";