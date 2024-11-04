<?php

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    
    function somaElementos($array) {
        $soma = 0;
        
        for($i = 0; $i < count($array); $i++) {
            $soma += $array[$i];
        }
        
        return $soma;
    }
    
    $res = somaElementos($arr);
    
    echo $res;

// Outra forma de fazer a soma dos elementos de um array

// <?php
//     $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
//     function somaElementos($array) {
//         $soma = array_sum($array);
//         return $soma;
//     }
//     $res = somaElementos($arr);
//     echo $res;