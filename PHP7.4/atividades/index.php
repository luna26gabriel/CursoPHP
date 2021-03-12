<?php 

require_once("config.php");

use Infantil\Livro;

$livro = new Livro();

var_dump($livro);

$livro->setNome("Os 4 porquinhos");
$livro->setAutor("Alguem ai");
$livro->setPaginas(39);

$livro->alugarLivro();


?>