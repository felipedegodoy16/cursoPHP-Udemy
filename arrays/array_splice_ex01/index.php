<?php 

    $arr = ["batata", "maçã", "pera", "feijão", "arroz"];

    print_r($arr);
    echo "<br>";

    array_splice($arr, 2, -1);

    print_r($arr);
    echo "<br>";