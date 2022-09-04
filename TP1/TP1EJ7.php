<?php

$expresionA = (3 * 2 - 4 / 2 * 1) > (3 * 2 + 2 * 1) and (5 > 11 % 4);
var_dump( $expresionA );
echo "<br>";

$expresionB = (3 >= 3 or 5 <> 5) and ! (15 / 5 + 2 <> 5);
var_dump( $expresionB );
echo "<br>";

$expresionC = ! (! ((3 * (- 3)) * 2 > (3 -(- 3 ) * 2 ) or 1 ^ 3 * 2 > 6 ) );
var_dump( $expresionC );
echo "<br>";

$expresionD =  (3 >= 4 and 5 > 3 and 3 > 3) or ! (4 <= 4 or 5 > 4 or 6 >= 7);
var_dump( $expresionD );
echo "<br>";