<?php

/*
En una tienda de descuento se efectúa una promoción en la cual se hace
un descuento sobre el valor de la compra total según el color de la bolita
que el cliente saque al pagar en caja. Si la bolita es de color blanco no
se le hará descuento alguno, si es verde se le hará un 10% de descuento,
si es amarilla un 25%, si es azul un 50% y si es anaranjada un 100%.
Determinar la cantidad final que el cliente deberá pagar por su compra si
se sabe que solo hay bolitas de los colores mencionados.
*/

$ValorCompra = readline("Ingresar Valor de Compra: ");
$BolitadeColor = readline("Ingrese el Color de la bolita: ");

if ($BolitadeColor = "blanco") {
    $Valorfinalcompra = $ValorCompra;
} elseif ($BolitadeColor = "verde") {
    $Valorfinalcompra = $ValorCompra - ($ValorCompra/10);
} elseif ($BolitadeColor = "amarillo") {
    $Valorfinalcompra = $ValorCompra - ($ValorCompra/4);
} elseif ($BolitadeColor = "azul") {
    $Valorfinalcompra = $ValorCompra - ($ValorCompra/2);
} elseif ($BolitadeColor = "anaranjado") {
    $Valorfinalcompra = $ValorCompra - $ValorCompra;
}

echo "Su valor de compra es de $ValorCompra y por sacar la bolita color $BolitadeColor
el valor final de su compra es de $Valorfinalcompra";

?>