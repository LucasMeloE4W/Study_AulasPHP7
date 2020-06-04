<?php

    /*
    *   OPERADOR DE INCREMENTO E DECREMENTO
    */

    $a = 10;

    ##                  VALOR DE INCREMENTO
    # Indica que o A inicialmente tem o valor de 10, e irá somar + 1 na variável #
    echo $a++;
    # Valor já somado com o incremento definido # 
    echo $a;

    # Indica que o A inicialmente tem o valor de 11, já que o incremento está sendo feito antes do valor da váriavel #
    echo ++$a;
    # Valor já somado com o incremento definido # 
    echo $a;


    ##                  VALOR DE DECREMENTO
    # Indica que o A inicialmente tem o valor de 9, e irá subtrair 1 na variável #
    echo $a--;
    # Valor já somado com o incremento definido # 
    echo $a;

    # Indica que o A inicialmente tem o valor de 9, já que o decremento está sendo feito antes do valor da váriavel #
    echo --$a;
    # Valor já subtraido com o incremento definido # 
    echo $a;


?>