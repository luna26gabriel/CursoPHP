<?php

abstract class Livro {

    private $nome;
    private $autor;
    private $paginas;

    public function getNome():string{
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getAutor():string{
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getPaginas():string{
        return $this->paginas;
    }

    public function setPaginas($paginas){
        $this->paginas = $paginas;
    }

    public function __toString(){
        
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Autor" . $this->getAutor() . "<br>";
        echo "Paginas: " . $this->getPaginas() . "<br>";
    }

}

?>