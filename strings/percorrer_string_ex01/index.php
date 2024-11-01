<?php 

    $string = "O rato roeu a roupa do rei de Roma";

    function percorrerString($str) {
        $total = 0;

        for($i = 0; $i < strlen($str); $i++) {
            if($str[$i] === "a") {
                $total++;
            }
        }

        return $total;
    }

    $retorno = percorrerString($string);

    echo $retorno . "<br>";