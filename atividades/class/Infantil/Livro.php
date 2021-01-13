<?php

namespace Infantil;

class Livro extends \Livro{

    public function alugarLivro(){
        echo "O livro " . $this->getNome() . "<br>Do Autor " . $this->getAutor() . " foi alugado";
    }

}

?>