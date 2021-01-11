<?php 

$a = 10;

function trocaValor(&$valor){

    $valor += 50;

    return $valor;

} 

echo $a;
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";
echo trocaValor($a);

?>