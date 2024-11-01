<?php 

    function countVowels($string) {
        $total = 0;

        for($i = 0; $i < strlen($string); $i++) {
            $letra = strtoupper($string[$i]);

            if($letra == 'A' || $letra == 'E' || $letra == 'I' || $letra == 'O' || $letra == 'U') {
                $total++;
            }
        }

        return $total;
    }

    $retorno = countVowels("Felipe");

    echo $retorno . "<br>";