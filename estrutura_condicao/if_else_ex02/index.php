<?php 

    $string = "teste";
    $inteiro = 123;
    $booleano = true;

    $msg = "É um inteiro! <br>";

    $error = "Não é um inteiro <br>";

    if(is_int($string)) {
        echo $msg;
    } else {
        echo $error;
    }

    if(is_int($inteiro)) {
        echo $msg;
    } else {
        echo $error;
    }

    if(is_int($booleano)) {
        echo $msg;
    } else {
        echo $error;
    }