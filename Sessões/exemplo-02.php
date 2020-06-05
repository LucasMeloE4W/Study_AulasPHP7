<?php

    /*
    *   EXEMPLO DE SESSION - DESTRUINDO SESSÃO
    */

    # Inicia a Sessão #
    session_start();

    # Limpa variáveis de Sessão #
    session_unset();

    # Destroi a variável da sessão e remove o usuário (como se fosse feito um novo acesso) #
    session_destroy()


?>