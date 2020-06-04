<?php

    /*
    *   OPERADOR NULL COLECTING  
    */


    $a = NULL;
    $b = NULL;
    $c = 10;

    # Se o valor anterior for NULO, ele irá ignorar e apresentar apenas o resultado após as verificações # 
    echo $a ?? $b ?? $c;

?>