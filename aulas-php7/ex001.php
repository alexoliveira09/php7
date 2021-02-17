<?php
$nome = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];

//echo "<br>".$ip;

$SN = $_SERVER["SCRIPT_NAME"];

echo "<br>".$SN;
?>