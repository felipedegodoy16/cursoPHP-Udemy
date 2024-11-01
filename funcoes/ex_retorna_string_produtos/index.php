<?php 

    $lista = ["Arroz", "Trigo", "Cerveja", "Sal", "Vinagre"];

    function arrayToString($arr) {

        $str = "Você levou os seguintes itens do supermercado: ";

        for($i = 0; $i < count($arr); $i++) {
            if($i + 1 == count($arr)) {
                $str .= "$arr[$i].";
            } else {
                $str .= "$arr[$i], ";
            }
        }

        return $str;
    }

    echo arrayToString($lista);