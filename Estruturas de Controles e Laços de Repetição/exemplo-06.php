<?php

    /*
     *  UTILIZANDO A FUNÇÃO 'FOR' COM DATE: 
    */

    # Busca pelas datas dos ultimos 100 anos anteriores a data atual #
    for ($i = date("Y"); $i > date("Y") - 100; $i--){

        echo $i;

    }

?>