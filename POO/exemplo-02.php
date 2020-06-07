<?php

    /*
    *   USO DE CLASSES - CRIAÇÃO DE ATRIBUTOS E MÉTODOS
    */

    class Carro {

        # ATRIBUTOS
        private $modelo;
        private $motor;
        private $ano;

        # Getter
        public function getModelo(){

            return $this->modelo;

        }

        # Setter
        public function setModelo($modelo){

            $this->modelo = $modelo;

        }

        # Getter
        public function getMotor(){

            return $this->motor;

        }

        # Setter
        public function setMotor($motor){

            $this->motor = $motor;

        }

        # Getter
        public function getAno(){

            return $this->ano;

        }

        # Setter
        public function setAno($ano){

            $this->ano = $ano;

        }

        public function exibir(){

            return array(
                "modelo"=>$this->getModelo(),
                "motor"=>$this->getMotor(),
                "ano"=>$this->getAno()
            );

        }

    }

    $carro = new Carro();
    $carro->setModelo("Gol");
    $carro->setMotor("1.0");
    $carro->setAno(2002);

    var_dump($carro->exibir());

?>