<?php

    /*
    *    POLIMORFISMO  
    */

    class Animal {

        public function falar(){
            return "Som";
        }

        public function mover(){
            return "Andar";
        }
    
    }

    class Cachorro extends Animal {

        public function falar(){
            return "Latido";
        }

    }

    class Gato extends Animal {

        public function falar(){
            return "Miado";
        }

    }

    $pluto = new Cachorro();
    echo "Cachorro: </br>";
    echo $pluto->falar() . "</br>";
    echo $pluto->mover() . "</br>";

?>