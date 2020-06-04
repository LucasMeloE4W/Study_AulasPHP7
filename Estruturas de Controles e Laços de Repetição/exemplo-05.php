<?php

    /*
    *    COMANDO FOR
    */

    # Muito utilizado para laços de repetição e incremento #
    # Variável 'i' é o contador, valor inicial
    # A segunda condição é o valor onde será o valor final
    # A terceira condição é a quantidade de valores para incremento
    for ($i = 0; $i <= 100; $i++){

        if ($i > 30 && $i < 50) continue;   # Esse bloco diz que os valores contidos dentro
                                            # do if deve ser ignorado.

        echo $i . '<br>';

    }

?>