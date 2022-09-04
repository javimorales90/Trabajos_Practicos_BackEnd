<?php

$a= 33;

$operacion = ! (( $a > 10 ) && ( $a < 20 ) );

var_dump ($operacion);
echo "<br>";


$operacion2 = ! (( $a> 10 ) or ! ( $a < 20 ));

var_dump ($operacion2);
echo "<br>";
