<?php
$qualSuaIdade = 68;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca) {
    echo "Criança";
} elseif ($qualSuaIdade < $idadeMaior) {
    echo "Adolecente";
} elseif ($qualSuaIdade < $idadeMelhor) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<hr>";
/** Operador ternário */

echo ($qualSuaIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";