<?php

require_once("config.php");
 
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

$headeres = array();

foreach($usuarios[0] as $index => $value){
    array_push($headeres, ucfirst($index));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headeres) . "\r\n");

foreach($usuarios as $row){

    $data = array();

    foreach($row as $index => $value){

        array_push($data, $index . " :: " . $value);

    }

    fwrite($file, implode(",", $data) . "\r\n");

}

fclose($file);

//echo implode(",", $headeres);


?>