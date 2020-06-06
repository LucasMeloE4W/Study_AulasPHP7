<?php

    /*
    *   FUNÇÕES PARÂMETROS POR VALOR & POR REFERÊNCIA
    */

    $a = 10;

    function trocarValor($a)
    {

        $a = 50;

        return $a;

    }

    # P. VALOR
    echo $a . '<br>';

    # P. REFERENCIA
    echo trocarValor($a);

?>