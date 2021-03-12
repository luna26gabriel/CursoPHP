<?php 

$qualASuaIdade = 25;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
    echo "crianca";
}
else if($qualASuaIdade < $idadeMaior){
    echo "adolecente";
}
else if($qualASuaIdade < $idadeMelhor){
    echo "adulto";
} 
else {
    echo "idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>