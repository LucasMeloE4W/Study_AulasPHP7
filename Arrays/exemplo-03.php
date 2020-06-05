<?php

    /*
    * EXEMPLO DE ARRAY BI-DIMENCIONAL 02 
    */

    $pessoas = array();

    array_push($pessoas, array(
        'Nome' => 'João',
        'Idade' => 20
    ));

    array_push($pessoas, array(
        'Nome' => 'Pedro',
        'Idade' => 34
    ));

    print_r($pessoas[0]['Nome'])

?>