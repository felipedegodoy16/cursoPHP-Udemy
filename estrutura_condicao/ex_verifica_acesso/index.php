<?php

    function verificarAcesso($idade, $acesso) {
        if($idade >= 18) {
            if($acesso) {
                return "Acesso autorizado";
            } else {
                return "Acesso negado. Autorização necessária";
            }
        } else {
            return "Acesso negado. Idade mínima requerida: 18 anos";
        }
    }
    
    $retorno = verificarAcesso(18, true);
    
    echo $retorno . "<br>";

    $retorno = verificarAcesso(13, true);
    
    echo $retorno . "<br>";

    $retorno = verificarAcesso(24, false);
    
    echo $retorno . "<br>";
