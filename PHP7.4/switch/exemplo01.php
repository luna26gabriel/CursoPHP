<?php

$diaDaSemana = 8;//date("w");

switch ($diaDaSemana){
    case 1: echo "Domingo";
    break;

    case 2: echo "Segunda";
    break;

    case 3: echo "Terca";
    break;

    case 4: echo "Quarta";
    break;

    case 5: echo "Quinta";
    break;

    case 6: echo "Sexta";
    break;

    case 7: echo "Sabado";
    break;

    default: echo "Data Invalida";
    break;
}

?>