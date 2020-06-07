<?php

    /*
    *   CRIAÇÃO DE CLASSES
    */

    # NOTA: Um atributo fora do método, se escreve normalmente.
    # Apenas dentro do método que se utiliza o $this

    class Pessoa {

        # Atributo nome
        public $nome;

        # Public = método público        
        public function falar()
        {

            return "O meu nome é " . $this->nome;

        }

    }

    $pedro = new Pessoa();
    
    $pedro->nome = "Pedro de Paula";

    echo $pedro->falar();
    

?>