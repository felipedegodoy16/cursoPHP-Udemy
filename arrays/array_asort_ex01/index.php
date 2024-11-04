<?php 

    $arr = [
        "Matheus" => 200,
        "João" => 54,
        "Pedro" => 444,
        "Maria" => 239,
        "Joana" => 123,
        "Henrique" => 12
    ];

    arsort($arr);

?>

<h1>Ranking:</h1>
<ol>
    <?php foreach($arr as $pessoa => $pontuacao): ?>
        <li><?= $pessoa ?> -> <?= $pontuacao ?></li>
    <?php endforeach; ?>
</ol>