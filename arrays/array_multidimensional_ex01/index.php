<?php

    $arr = [
        [1, 2, 3, 4],
        [2, 4, 6, 8],
        [1, 3, 5, 7]
    ];

    for($i = 0; $i < count($arr); $i++) {

        echo "Imprimindo o array externo: " . ($i + 1) . " <br>";

        for($j = 0; $j < count($arr[$i]); $j++) {
            echo $arr[$i][$j] . "<br>";
        }
    }