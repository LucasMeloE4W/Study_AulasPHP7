<?php

    /*
    *   USO DA FUNÇÃO DATE 
    */

    # MUDA TODA A CONFIGURAÇÃO DO SISTEMA PARA PORTUGUES - BR
    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

    # EXPÕEM OS DADOS NA TELA
    echo strftime("%A %B");
    
?>