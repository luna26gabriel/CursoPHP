<?php

$anoNascimento = "2000";

$nome = "Gabriel";
$sobreNome = "Luna";

$nomeCompleto = $nome . " " . $sobreNome;

echo $nomeCompleto;

exit;

//Evite caracter Especial

echo $anoNascimento;



echo "<br/>";

//retirar a variaval 
unset($anoNascimento);

// isset -> verificar se a variavel existe
if(isset($anoNascimento)){
    
echo $anoNascimento;

}

?>