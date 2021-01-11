<?php

$nome = "Luna";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){

    $nome = "Anna";
    echo $nome . " no teste 2";
}

teste();
teste2();

?>