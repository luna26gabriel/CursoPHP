<?php 

class Pessoa {

    public $nome= "Luna";
    protected $idade = 20;
    private $senha = "123";

    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Pessoa();
//echo $objeto->senha;

$objeto->verDados();

?>