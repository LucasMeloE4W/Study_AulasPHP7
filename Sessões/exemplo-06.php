<?php

    /*
    *   EXEMPLO DE SESSION - FUNÇÕES DE SESSÃO
    */

    # Inicia a sessão #
    session_start();

    # Recupera onde está sendo guardado o id de sessão no servidor #
    session_save_path();

    # Verifica a situação da sessão atual #
    session_status();


    echo session_save_path(); # Mostra na tela a informação a cima #
    echo '<br>';
    echo session_status(); # Mostra na tela a informação do status #
    echo '<br>';


?>