<?php

    /*
    *   ESCOPO DE VARIÁVEL 
    */

    $nome = "Pedro";

    # Função definida 01 #
    function test(){

        # Para se ouvir uma variável que vem de fora da função, utiliza-se o 'Global'  #
        global $nome;
        echo $nome . 'Teste N° 1';

    }

    # Função definida 02 #
    function anotherTest(){

        # Caso não seja chamado o 'Global' não será utilizado os dados instanciados fora da função #
        $nome = "João";
        echo $nome . 'Teste N° 2';

    }

    # Chamada de Função Definida #
    test();

?>