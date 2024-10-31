<?php

    function calcularDesconto($valor, $categ) {
        switch($categ){
            case "eletrônicos":
                $total = $valor - $valor * (10/100);
                break;
            case "vestuário":
                $total = $valor - $valor * (20/100);
                break;
            case "alimentos":
                $total = $valor - $valor * (5/100);
                break;
            default:
                $total = $valor;
                break;
        }
        
        return $total;
    }
    
    $retorno = calcularDesconto(1000, "eletrônicos");
    echo $retorno . "<br>";

    $retorno = calcularDesconto(1000, "vestuário");
    echo $retorno . "<br>";

    $retorno = calcularDesconto(1000, "alimentos");
    echo $retorno . "<br>";

    $retorno = calcularDesconto(1000, "carros");
    echo $retorno . "<br>";