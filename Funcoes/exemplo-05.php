<?php

    /*
    *   FUNÇÕES PARÂMETROS POR VALOR & POR REFERÊNCIA
    */


    $pessoa = array(
        'nome' => "João",
        'idade' => 30
    );

    foreach ($pessoa as &$value){


        echo $value.'<br>';

    }


?>