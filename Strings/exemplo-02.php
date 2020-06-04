<?php


    /*
     *   FUNÇÕES DE STRING
    */

    $nome = "paulo guedes";

    # TODAS AS LETRAS MAIÚSCULAS - strtoupper #
    $nome = strtoupper($nome);
    echo $nome;

    # TODAS AS LETRAS MINÚSCULAS - strtolower #
    $nome = strtolower($nome);
    echo $nome;

    # APENAS AS LETRAS INICIAIS MAIUSCULAS DE TODAS AS PALAVRAS - ucwords  #
    $nome = ucwords($nome);
    echo $nome;

    # APENAS A PRIMEIRA LETRA MAIUSCULA DE TODA A FRASE - ucfirst #
    $nome = ucfirst($nome);
    echo $nome;


?>