<?php 

    $arr = [1, 23, 32, 45, 64, 2, 23, 22, 111, 1, 4];

    function ordenarNumeros($array) {
        sort($array);
        return $array;
    }

    $arrayOrdered = ordenarNumeros($arr);

    var_dump($arrayOrdered);