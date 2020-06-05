<?php

    /*
    *   EXEMPLO DE SESSION - RECUPERAÇÃO DE SESSÃO
    */

    # Utiliza um ID Pré Definido #
    session_id(''); # Dentro das aspas simples deve ser incluido o ID #
    
    # Inicia a sessão #
    session_start();

    # Exibe o ID da sessão #
    echo session_id();

?>