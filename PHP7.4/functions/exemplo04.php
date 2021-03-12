<?php 

function ola(){

    $argumentos = func_get_args();

    echo $argumentos[0] . "<br>";
    echo $argumentos[1] . "<br>";
    echo $argumentos[2] . "<br>";

    return $argumentos;
}

var_dump(ola("Bom Dia", 10, 20));

?>