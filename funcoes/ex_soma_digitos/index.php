<?php 

    function sumDigits($valor) {
        $soma = 0;
        $str = (string) $valor;
        
        for($i = 0; $i < strlen($str); $i++) {
            $soma += (int) $str[$i];
        }

        return $soma;
    }

    echo sumDigits(10) . "<br>";
    echo sumDigits(22) . "<br>";