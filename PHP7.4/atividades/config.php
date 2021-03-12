<?php

spl_autoload_register(function($nomeClass){

    $dirName = "class";
    //$filename -> $Caminho do arquivo, não o nome;
    $filename = $dirName . DIRECTORY_SEPARATOR . $nomeClass . ".php";

    if(file_exists($filename)){
        require_once($filename);
    }

});

?>