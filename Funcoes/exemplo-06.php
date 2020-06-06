<?php

    /*
    *   FUNÇÕES - NOVIDADES PHP7
    */

    function soma(int ... $valores)
    {

        return array_sum($valores);

    }

    echo soma(2,2);
    echo '<br>';
    echo soma(20,48);
    echo '<br>';
    echo soma(2,10);
    echo '<br>';
    echo soma(1.5,25);
    echo '<br>';

?>