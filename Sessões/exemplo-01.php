<?php

    /*
    *   UTILIZANDO SESSÕES NO SISTEMA
    */

    # Inicialização de uma sessão #
    session_start();

    # Define os dados a serem guardados #
    $_SESSION["Nome"] = "Pedro";

    # Recupera os dados guardados na Session #
    echo $_SESSION["Nome"];

?>