<?php

    /*
    ! CHAMADA DO COMANDO INCLUDE DO EXEMPLO-01.PHP 
    */

    # Chamada do comando include, trazendo outras funções de outros arquivos, não obriga existir ou que esteja
    # em pleno funcionamento. #
    include "exemplo-01.php";

    # Obriga trazer apenas uma vez o arquivo #
    include_once "exemplo-01.php";


    # Comando require, também trás o arquivo de outro local, porém o require obriga que o arquivo exista ou esteja
    # funcionando corretamente. #
    require "exemplo-01.php";

    # Obriga trazer apenas uma vez o arquivo #
    require_once "exemplo-01.php";

    # Somar é uma função que está sendo chamada do exemplo-01.php #
    $resultado = somar(10, 20);

    echo $resultado;

?>