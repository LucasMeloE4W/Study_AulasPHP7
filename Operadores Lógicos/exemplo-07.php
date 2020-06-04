<?php 

    /*
    *   OPERADORES DE PRECEDENCIA 
    */

    # O parentesê indica a prioridade do calculo #
    $result = (10 + 3) / 2;
    echo $result;

    # Validação de prioridade e condições de comparação #
    $result = (10 + 3) / 2 > 5 && 10 + 5 < 3;
    var_dump($result);
    # Caso tenha o && na operação, as duas precisam ser intanciadas no mesmo tipo #


    # Indicação de OR, indica quando uma das condições é verdadeira #
    $result = (10 + 3) / 2 > 5 || 10 + 5 < 3;
    var_dump($result);
    # Utilizado o operador || #

?>