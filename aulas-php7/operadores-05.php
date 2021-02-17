<?php

// Operadores de atribucao php7

$a = NULL;
$b = 8;
$c = 10;

echo $a ?? $b ?? $c;


echo "<br><hr>";

// Operadores de incrementais, decrementais php7

$d = 10;

echo ++$d;

echo "<br>";

echo $d--;

echo "<br>";

//$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado);


