<?php 

$empresa = "Isso é apenas uma frase para testes";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("a", "4", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo $empresa;

?>