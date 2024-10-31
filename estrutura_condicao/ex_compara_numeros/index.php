<?php

    function compararNumeros($a, $b) {
        if($a > $b) {
            return "O primeiro número é maior";
        } else if($a < $b) {
            return "O segundo número é maior";
        } else {
            return "Os números são iguais";
        }
    }
    
    $retorno = compararNumeros(5, 2);
    echo $retorno . "<br>";
    
    $retorno = compararNumeros(1, 2);
    echo $retorno . "<br>";
    
    $retorno = compararNumeros(2, 2);
    echo $retorno . "<br>";