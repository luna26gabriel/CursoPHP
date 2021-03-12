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

class Programador extends Pessoa{

    public $lingua = "PHP";

    public function verDados(){

        echo get_class($this);

        echo "<br>";

        $pessoa = new Pessoa();
        echo $pessoa->verDados();

        echo get_class($pessoa);

        echo $this->lingua . "<br>";
    }
}

$objeto = new Programador();
//echo $objeto->senha;

$objeto->verDados();

?>