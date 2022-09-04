<?php


$M = 8;
$N = 9;
$R = 5;
$S = 5;
$T = 4;
$V = 77;

$expresion = ! (($M > $N and $R > $S ) or ( ! ( $T < $V and $S > $M ) ) );
var_dump( $expresion );
echo "<br>";

