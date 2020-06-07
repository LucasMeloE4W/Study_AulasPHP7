<?php

    /*
    *   ENCAPSULAMENTO DE CLASSES
    */

    class Pessoa {

        public $nome = "Paulo Guedes";
        protected $idade = 40;
        private $senha = "1234567";

        public function verDados(){

            echo $this->nome."<br>";
            echo $this->idade."<br>";
            echo $this->senha."<br>";

        }

    }

    $objeto = new Pessoa();

    /*
    ! PRIVADOS E PROTEGIDOS SOMENTE AS CLASSES PODEM VER OS MÉTODOS E ATRIBUTOS
    echo $objeto->nome."<br>"; # Publico todos tem acesso.
    echo $objeto->idade."<br>"; # Protegido somente a classe tem acesso.
    echo $objeto->senha."<br>";  # Privado somente a classe tem acesso.
    */

    $objeto->verDados(); # Função que tem acesso

?>