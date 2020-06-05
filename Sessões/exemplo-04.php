<?php

    /*
    *   EXEMPLO DE SESSION - SESSÃO UNICA
    */

    # Inicia a sessão #
    session_start();

    # Cria um novo ID para o usuário todas as vezes que acessar o sistema #
    /* 
    ! Deve ser utilizado sempre durante a validação de Login 
    */
    session_regenerate_id();

    # Exibe o ID da sessão #
    echo session_id();

?>