<?php 

    $arr = [1, 3, 2, 45, 1, 2, 12, 32];

    function maiorElemento($array) {
        $maior = 0;

        for($i = 0; $i < count($array); $i++) {
            if($array[$i] > $maior) {
                $maior = $array[$i];
            }
        }

        return $maior;
    }

    $maiorElem = maiorElemento($arr);

    echo $maiorElem;

// Outra maneira de achar o maior número do array
// <?php 
//     $arr = [1, 3, 2, 45, 1, 2, 12, 32];
//     function maiorElemento($array) {
//         sort($array);
//         $indice = count($array) - 1; 
//         return $array[$indice];
//     }
//     $maiorElem = maiorElemento($arr);
//     echo $maiorElem;

// Outra maneira e a mais correta a se fazer
// <?php 
//     $arr = [1, 3, 2, 45, 1, 2, 12, 32];
//     function maiorElemento($array) {
//         return max($array);
//     }
//     $maiorElem = maiorElemento($arr);
//     echo $maiorElem;