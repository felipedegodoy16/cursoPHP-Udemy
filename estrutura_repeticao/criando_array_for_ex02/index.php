<?php 

    $arr = [];

    for($i = 10; $i <= 20; $i++) {
        array_push($arr, $i);
    }

    print_r($arr);
    echo "<br>";

    for($i = 0; $i < count($arr); $i++) {
        $numeroAtual = $arr[$i];

        if($numeroAtual % 2 == 1) {
            echo "$numeroAtual <br>";
        }
    }