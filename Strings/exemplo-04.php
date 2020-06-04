<?php

    /*
    *   FUNÇÕES DE STRING 
    */

    # FRASE INSTANCIADA #
    $frase = "A repetição é a mãe da retenção.";

    # BUSCAR POR ITEM SELECIONADO DENTRO DE UMA STRING - strpos #
    # 1° - A variável para ser feita a busca.
    # 2° - O que deve ser buscado.
    $q = strpos($frase, "mãe");

    # BUSCAR NO TEXTO APENAS ATÉ A PARTE SELECIONADA #
    # 1° - A variável para ser feita a busca.
    # 2° - A posição inicial da busca.
    # 3° - Até onde deve ser feita a busca. 
    $texto = substr($frase, 0, $q);

    echo $texto;
?>