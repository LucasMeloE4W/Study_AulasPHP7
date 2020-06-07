<?php

    /*
    *   INTERFACE 
    */

    interface Veiculo {

        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);

    }

    class Civic implements Veiculo {

        public function acelerar($velocidade){
            echo "O veiculo acelerou até " . $velocidade . "km/h" . "<br>";
        }

        public function frenar($velocidade){
            echo "O veiculo frenou até " . $velocidade . "km/h" . "<br>";
        }

        public function trocarMarcha($marcha)
        {
            echo "O veiculo trocou a marcha " . $marcha . "<br>";
        }        

    }

    $carro = new Civic();
    $carro->acelerar("135 ");
    $carro->trocarMarcha("3 ");
    $carro->frenar("65 ");


?>