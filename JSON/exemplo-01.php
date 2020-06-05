<?php

    /*
    * EXEMPLO DE USO DO 'JSON' - 'JSON ENCODE'
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

    echo json_encode($pessoas);

?>