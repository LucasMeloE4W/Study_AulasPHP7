<?php


    /*
    *   CONDIÇÃO 'WHILE'
    */

    # Condição a ser buscada no laço de repetição
    $condicao = true;

    # Enquanto não retornar TRUE ele não irá parar sua busca #
    while($condicao){

        $numero = rand(1, 10);

        if ($numero === 3){

            echo "TRÊS!!";
            $condicao = false;
        
        }
    
        echo $numero . " ";

    }
?>