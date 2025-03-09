<?php
$a = 10;
$b = 20;


// Operadores aritméticos
$suma = $a + $b;
$resta= $a- $b;
$multiplicacion = $a * $b;
$division = $a / $b;


// Operadores de comparación
$esMayor = $a > $b;// false
$esIgual = $a == $b; // false


// Operadores lógicos
$and = ($a < $b) && ($a > 5); // true
$or = ($a > $b) || ($a == 10); // true


echo "Suma: $suma, Resta: $resta, Multiplicación: $multiplicacion, División: $division";
?>
