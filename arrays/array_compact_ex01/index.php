<?php 

    $especie = "Cachorro";
    $raca = "Vira lata";
    $nome = "Apollo";
    $idade = 3;
    $cor = "Amarelo";

    $animal = compact("especie", "raca", "nome", "idade", "cor");

    var_dump($animal);
    echo "<br>";

    foreach($animal as $caracteristica => $value) {
        echo "$caracteristica: $value <br>";
    }