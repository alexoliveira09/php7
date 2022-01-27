<?php

$nome = "Hcode";

echo $nome . " mais alguma coisa<br>";

$nome .= "Treinamentos";

echo $nome;

$valorTotal = 0;

$valorTotal += 100;

$valorTotal += 25;

//$valorTotal += -10;

$valorTotal *= .9;

echo $valorTotal;

$a = 10;
$b = 2;

echo $a + $b;

echo "<br>";

echo $a - $b;

echo "<br>";

echo $a * $b;

echo "<br>";

echo $a / $b;

echo "<br>";

echo $a % $b;

echo "<br>";

echo $a ** $b;

$a = 55.0;

$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a == $b);

echo "<br>";

var_dump($a === $b);

echo "<br>";

var_dump($a != $b);

echo "<br>";

var_dump($a !== $b);

$a = 50;

$b = 35;

var_dump($a <=> $b);

echo "<br>";

$a = 35;

$b = 35;

var_dump($a <=> $b);

echo "<br>";

$a = 50;

$b = 60;

var_dump($a <=> $b);

$a = NULL;

$b = 8;

$c = 10;

echo $a ?? $b ?? $c;

$a = 10;

echo ++$a;

echo "<br>";

echo $a;

echo "<br>";

echo --$a;

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado);
