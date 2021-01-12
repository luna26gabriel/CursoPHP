<?php 

class Pessoa {

    public $nome;//Atributo

    public function falar(){//Método

        return "O meu nome é " . $this->nome;

    }

}

$gabriel = new Pessoa();
$gabriel->nome = "Gabriel Luna";
echo $gabriel->falar();


?>
