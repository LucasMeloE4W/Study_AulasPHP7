<?php

    /*
    *   COMANDO 'DO WHILE'
    */

    $total = 100;
    $desconto = 0.9;

        # INICIA O "DESCONTO DO VALOR SELECIONADO"
    do {

        $total *= $desconto;
    
        # SOMENTO ENQUANTO O VALOR É MAIOR DO QUE 100
    } while ($total > 100);

    echo $total;

?>