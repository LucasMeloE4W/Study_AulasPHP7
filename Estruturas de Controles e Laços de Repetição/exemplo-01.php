<?php

    /*
    *   COMANDO DE ESTRUTURA CONDICIONAL 'IF' 'ELSE IF' 'ELSE'
    */

    $qualIdade = 30;

    $idadeCrianca = 12;
    $idadeAdulto = 18;
    $idadeIdoso = 65;

        # If é sempre o primeiro a ser instanciado no bloco #
    if ($qualIdade < $idadeCrianca){

        echo "É uma criança.";
    
        # Else If pode ser utilizado quando existe mais de um tipo de verificação #
    } else if ($qualIdade < $idadeIdoso){

        echo "É um adulto.";

        # Else deve ser usado apenas uma vez (sempre ao final do bloco) #    
    } else{

        echo "É um idoso.";

    }


?>