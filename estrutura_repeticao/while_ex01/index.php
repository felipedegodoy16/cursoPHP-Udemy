<?php 

    $arr = ["Felipe", "Julya", 1, 1.2, true, "teste", 2, false, 14.5, "Testando"];

    $cont = 0;

    while($cont < count($arr)) {
        if(is_string($arr[$cont])) {
            echo $arr[$cont] . "<br>";
        }
        $cont++;
    }

