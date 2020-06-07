<?php

    /*
    *   HERANÇAS
    */

    class Documento {

        private $numero;

        public function getNumero(){

            return $this->numero;

        }

        public function setNumero($n){

            $this->numero = $n;

        }

    } # FIM DA CLASSE DOCUMENTO #

    class CPF extends Documento {

        public function validar():bool{

            $numeroCPF = $this->getNumero();

            // Aqui seria uma validação do CPF #
            return true;

        }

    } # FIM DA CLASSE CPF #

    $doc = new CPF();

    $doc->setNumero("11122233344");
    $doc->validar();
  
    var_dump($doc->validar());  
    echo "<br>";
    echo $doc->getNumero();
    
?>