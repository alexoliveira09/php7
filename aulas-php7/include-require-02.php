<?php
/*
 * include = tenta funcionar mesmo que o arquivo não exista. e tem mais funções. path
 * 
 * require = obriga que o arquivo exista e que o arquivo esteja funcionando corretamete senão dá um erro fatal.
 * 
 */

//include "include-require-01.php";
require_once "include-require-01.php";
require_once "include-require-01.php";

$resultado = somar(10, 25);

echo $resultado;