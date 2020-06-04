<?php

    /*
     *      USO DA CONDIÇÃO 'FOREACH' 
    */

    $meses = array(
        "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
    );

    # O primeiro parametro é a variável onde deve percorrer a procura.
    # O segundo parametro trás o index da posição do caminho percorrido.
    # O terceiro parametro trás os valores naquela variável determinada.
    foreach ($meses as $index => $mesEncontrado) {

        echo "Indice é: " . $index . '<br>';
        echo "O mês é: " . $mesEncontrado . '<br> <br>';

    }
    
?>