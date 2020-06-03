<?php

    /*
    *  Variáveis devem ser alto explicativas e com boa indexção
    *  Tipos de variáveis: 
    */

    # Variável do tipo INT #
    $anoNascimento = 1990;

    # Variável do tipo STRING #
    $nomeCompleto = "Lucas Melo";

    # Variável do tipo FLOAT #
    $valorReais = 19.90;

    # Variável do tipo BOOL #
    $verdadeiroBool = true;
    $falsoBool = false;

    # Variável do tipo ARRAY #
    $frutas = array("abacaxi", "laranja", "manga");

    # Variável do tipo RESOURCE #
    $arquivo = fopen("exemplo-02.php", "r");

    # Variável do tipo NULL #
    $nuloTotal = NULL;
    $nuloVazio = '';

    # Concatenação de variáveis #
    $dadosCompletos = $anoNascimento . $nomeCompleto;

    # Comando para destruir a variável:
    unset($anoNascimento, $nomeCompleto, $valorReais, $verdadeiroBool, $falsoBool);

?>