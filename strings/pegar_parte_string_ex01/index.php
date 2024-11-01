<?php 

    $str = "Cadê o meu queijo? Ele estava aqui em cima";

    $resgate = substr($str, 12, 6);

    $resgate2 = substr($str, 24, -13);

    echo $resgate . "<br>";

    echo $resgate2 . "<br>";