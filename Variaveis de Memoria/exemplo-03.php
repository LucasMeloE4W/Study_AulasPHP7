<?php

    /*
    *   Váriaveis Pré-Definidas: 
    */

    # Geralmente o método GET é utilizado em transmissões de informações #
    $nome = $_GET["123"];

    var_dump($nome);

    # MÉTODO PARA IDENTIFICAÇÃO DO ENDEREÇO DE IP DO USUÁRIO #
    $ip = $_SERVER["REMOTE_ADDR"];

    var_dump($ip);


?>