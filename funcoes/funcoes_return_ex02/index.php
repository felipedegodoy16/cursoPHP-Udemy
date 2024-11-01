<?php 

    function arrayMaiorQueSete($arr) {
        $array = [];

        for($i = 0; $i < count($arr); $i++) {
            $numeroAtual = $arr[$i];

            if($numeroAtual > 7) {
                array_push($array, $numeroAtual);
            }
        }

        return $array;
    }

    $nums = [];

    for($i = 0; $i <= 30; $i++) {
        array_push($nums, $i);
    }

    $retorno = arrayMaiorQueSete($nums);

    print_r($retorno);
