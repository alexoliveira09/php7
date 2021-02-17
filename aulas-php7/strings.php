<?php

$nome = "alex";
$nome .= " oliveira";

$nome2 = " Oliveira";

//var_dump($nome, $nome2);
/*
aspas dupla verifica antes.
aspas simples entende que tudo é texto
*/
echo "Nome $nome <br>";
echo 'Nome $nome <br>';

echo "Somente a primeira letra de cada palavra maiúsculo: ".ucwords($nome); // Primeira letra maiusculo
echo "<br>";
echo "Tudo maiúsculo: ".strtoupper($nome); 
echo "<br>";
echo "Tudo minusculo: ".strtolower($nome); 
echo "<br>";
echo "A primeira letra maiúsculo: ".ucfirst($nome); // Primeira letra maiusculo
echo "<br>";

echo "<hr>";

$empresa = "PageSytem";

echo str_replace('e','3',$empresa);

echo "<hr>";

$frase = "A repetição é a mãe da repetição.";
$palavra = "mãe";
echo $frase;
echo "<br>";
$l = strpos($frase, "mãe");
$texto = substr($frase,0,$l);

var_dump($texto);

$texto2 = substr($frase, $l + strlen($palavra), strlen($frase));
echo "<br>";
var_dump($texto2);

