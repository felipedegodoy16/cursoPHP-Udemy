<?php 

    $pessoa = [
        'nome' => 'Felipe',
        'altura' => 1.7,
        'cabelo' => 'loiro',
        'olhos' => 'azuis',
        'idade' => 19
    ];

    print_r($pessoa);

    echo "<br>";

    if($pessoa['idade'] >= 18){
        echo "Essa pessoa é maior de idade <br>";
    }