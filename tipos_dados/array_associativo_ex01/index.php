<?php 

    $carro = [
        'marca' => 'BMW',
        'rodas' => 4,
        'teto_solar' => true,
        'velocidade_max' => 300,
        'blindade' => false
    ];

    print_r($carro);

    $marca = $carro['marca'];
    $veloc_max = $carro['velocidade_max'];

    echo "<br>";

    echo "O carro é da marca $marca e atinge no máximo $veloc_max km/h";