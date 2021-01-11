<?php

$nome = (int)$_GET["a"];

//var_dump($nome);

//Ver o ip do usuario;
$ip = $_SERVER["REMOTE_ADDR"];

//Ver qual arquivo está acessando;
$localArquivo = $_SERVER["SCRIPT_NAME"];

echo $localArquivo;
echo "<br/>";
echo $ip;

?>