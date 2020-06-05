<?php

    /*
    *   FUNÇÃO PARA RECUPERAR O JSON RECEBIDO
    */
    $json = '[{"Nome":"Jo\u00e3o","Idade":20},{"Nome":"Pedro","Idade":34}]';

    print_r(json_decode($json, true));

?>