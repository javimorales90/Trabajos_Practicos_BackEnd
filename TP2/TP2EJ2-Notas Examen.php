<?php

/*
Una institución de educación, con carreras tanto diurnas como vespertinas,
considera lo siguiente en su proceso académico: si un estudiante de carrera
 vespertina tiene una nota de presentación mayor o igual a 6, se exime, y si
no alcanza el 6 pero tiene una nota de presentación igual o mayor a 3.5,
rinde examen. Si el estudiante es de carrera diurna y si su nota de presentación
 es mayor o igual a 3.5, rinde examen (no hay posibilidad de eximirse).
  En ambos regímenes, si la nota de presentación es menor que 3.5, reprueba.
   Hacer la tabla de decisión y escriba el algoritmo correspondiente.

   */


   //PRIMERA OPCION
   /*
   $nota_vespertina = readline ("Ingrese nota: ");
   $nota_diurna = readline ("Ingrese nota: ");

   if ($nota_vespertina >= 6)   {
    echo "Se exime";
   }    elseif ($nota_vespertina < 6 && $nota_vespertina >= 3.5) {
    echo "Rinde Examen";
   } else {
    echo "Reprueba";
   }

   echo PHP_EOL;

   if ($nota_diurna >= 3.5) {
    echo "Rinde Examen";
   } else {
    echo "Reprueba";
   }
   */

   //SEGUNDA OPCION
      
   /*
   $nota_vespertina = readline ("Ingrese nota Turno Vespertino: ");
   $nota_diurna = readline ("Ingrese nota Turno Diurno: ");

   if ($nota_vespertina >= 6)   {
    echo "Su nota es $nota_vespertina y su condición es: Eximido";
   } elseif ($nota_vespertina < 6 && $nota_vespertina >= 3.5) {
    echo "Su nota es $nota_vespertina y su condición es: Rinde Examen";
   } else {
    echo "Su nota es $nota_vespertina y su condición es: Reprobado";
   }

   echo PHP_EOL;

   $condicion_nota_diurna = ($nota_diurna>=35/10) ? "Rinde Examen" : "Reprobado";
    echo "Su nota es $nota_diurna y su condición es: $condicion_nota_diurna";

*/

// TERCERA OPCION

/*
Una institución de educación, con carreras tanto diurnas como vespertinas,
considera lo siguiente en su proceso académico: si un estudiante de carrera
 vespertina tiene una nota de presentación mayor o igual a 6, se exime, y si
no alcanza el 6 pero tiene una nota de presentación igual o mayor a 3.5,
rinde examen. Si el estudiante es de carrera diurna y si su nota de presentación
 es mayor o igual a 3.5, rinde examen (no hay posibilidad de eximirse).
  En ambos regímenes, si la nota de presentación es menor que 3.5, reprueba.
   Hacer la tabla de decisión y escriba el algoritmo correspondiente.

   */
$turno = readline ("Ingrese Turno (V o D): ");
$nota = readline ("Ingrese Nota: ");

switch ($turno) {
    case "V":
        if ($nota >= 6)   {
            echo "Su nota es $nota y su condición es: Eximido";
           } elseif ($nota < 6 && $nota >= 3.5) {
            echo "Su nota es $nota y su condición es: Rinde Examen";
           } else {
            echo "Su nota es $nota y su condición es: Reprobado";
           };
        break;
    case "D":
        $condicion_nota_diurna = ($nota>=35/10) ? "Rinde Examen" : "Reprobado";
            echo "Su nota es $nota y su condición es: $condicion_nota_diurna";
        break;
    default:
        echo "La Nota o el Turno ingresado no es correcto";
        break;
    }


    ?>

    