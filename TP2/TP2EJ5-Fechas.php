<?php

/*
Leer un valor de Día, Mes y Año de una fecha (ej.: 10-5-2003).
Mostrar la fecha con el respectivo nombre del mes (ej.: 10-mayo-2003).
Si el número leído para el mes no está entre 1 y 12 imprimir un mensaje de error.
Comprobar que el día se encuentre entre 1 y 31 y el año sea mayor que 2000.
*/

$dia = readline("Ingrese día : ");
$mes = readline("Ingrese mes : ");
$año = readline("Ingrese año : ");

switch ($mes) {
    case 1:
        $mesNombre = "enero";
        break;
    case 2:
        $mesNombre = "febrero";
        break;
    case 3:
        $mesNombre = "marzo";
        break;
    case 4:
        $mesNombre = "abril";
        break;
    case 5:
        $mesNombre = "mayo";
        break;
    case 6:
        $mesNombre = "junio";
        break;
    case 7:
        $mesNombre = "julio";
        break;
    case 8:
        $mesNombre = "agosto";
        break;
    case 9:
        $mesNombre = "septiembre";
        break;
    case 10:
        $mesNombre = "octubre";
        break;
    case 11:
        $mesNombre = "noviembre";
        break;
    case 12:
        $mesNombre = "diciembre";
        break;
    default:
        $mesNombre = "Error, número de mes incorrecto. Fecha no válida";
        echo $mesNombre.PHP_EOL;
        break;

    }

    

    if ($dia >= 1 && $dia <= 31 && $año > 2000) {
        echo $dia . "-" . $mesNombre . "-" . $año;
} else {
    echo "Día solo del 1 al 31 y año desde el 2000 ";
}