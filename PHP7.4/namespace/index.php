<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Luna");
$cad->setEmail("luna@gmail.com");
$cad->setSenha("123");

$cad->registrarVenda();

?>