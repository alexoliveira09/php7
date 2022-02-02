<?php

$nome = "Hcode";

$nome2 = 'Treinamentos';

//var_dump($nome, $nome2);

echo "ABC $nome";


$nome = "Joao Rangel";

$nome = strtoupper($nome);

echo $nome;

$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";

echo ucfirst($nome);

echo "<br>";

echo ucwords($nome);


$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);

$empresa = str_replace("e", "3", $empresa);

echo $empresa;


$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

