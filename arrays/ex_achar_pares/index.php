<?php 

    $arr = range(1, 10);

    function encontrarPares($array) {
        $pares = [];

        for($i = 0; $i < count($array); $i++) {
            if($array[$i] % 2 == 0) {
                array_push($pares, $array[$i]);
            }
        }

        return $pares;
    }

    $retorno = encontrarPares($arr);

    var_dump($retorno);

// Outra maneira de se fazer o exercício
// <?php 
//     $arr = range(1, 10);
//     function encontrarPares($val) {
//         return !($val & 1);
//     }
//     $retorno = array_filter($arr, "encontrarPares");
//     var_dump($retorno);