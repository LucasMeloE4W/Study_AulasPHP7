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

    } # FIM DA CLASSE "PESSOA" #

    class Programador extends Pessoa {



    } # FIM DA CLASSE "PROGRAMADOR"

  
    $objeto = new Programador();
    $objeto->verDados(); 

?>