<?php

function incluirClass($nomeClass){
    if(file_exists($nomeClass. ".php") === true){
        require_once($nomeClass. ".php");
    }
}

spl_autoload_register("incluirClass");
spl_autoload_register(function($nomeClass){
    if(file_exists("abstract" . DIRECTORY_SEPARATOR . $nomeClass. ".php") === true){
        require_once("abstract" . DIRECTORY_SEPARATOR . $nomeClass. ".php");
    }
});

$carro = new DelRey();

$carro->acelerar(80);

?>