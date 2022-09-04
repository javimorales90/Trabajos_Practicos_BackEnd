<?php

$a = 20;
$b = $a;
$c = 15;
$d = 10;

$operacion = (( $a = $b ) or ( $b > $c ) ) or ( $c < $d );

var_dump( $operacion );
echo "<br>";