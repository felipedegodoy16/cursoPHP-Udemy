<?php

    function sumEvenNumbers($num) {
        $soma = 0;
        for($i = 2; $i <= $num; $i++) {
            if($i % 2 == 0) {
                $soma += $i;
            }
        }
        return $soma;
    }
    
    $retorno = sumEvenNumbers(10);
    
    echo $retorno . "<br>";