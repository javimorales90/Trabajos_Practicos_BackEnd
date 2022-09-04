<?php

$a = 10;
$b = 12;
$c = 13;
$d = 10;

$operacionA = (( $a > $b ) or ( $a < $c ) ) and ( ( $a = $c) or ( $a >= $b ) );
var_dump( $operacionA );
echo "<br>";

$operacionB = (( $a >= $b ) or ( $a < $d ) ) and ( ( $a >= $d ) and ($c > $d ) );
var_dump( $operacionB );
echo "<br>";

$operacionC = ! ($a = $c ) and ( $c > $b );
var_dump( $operacionC );
echo "<br>";