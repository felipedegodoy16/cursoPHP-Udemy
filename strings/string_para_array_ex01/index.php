<?php 

    $frase = "carro - navio - helicóptero - barco - jangada";

    $array = explode(" - ", $frase);

    print_r($array);
    echo "<br>";

    for($i = 0; $i < count($array); $i++) {
        echo $array[$i] . "<br>";
    }