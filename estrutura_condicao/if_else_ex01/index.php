<?php 

    $idade1 = 18;
    $idade2 = 13;
    $idade3 = 22;

    $msg = "Você é maior de idade <br>";

    $error = "Você é menor de idade <br>";

    if($idade1 >= 18) {
        echo "1 - ";
        echo $msg;
    } else {
        echo "1 - ";
        echo $error;
    }

    if($idade2 >= 18) {
        echo "2 - ";
        echo $msg;
    } else {
        echo "2 - ";
        echo $error;
    }

    if($idade3 >= 18) {
        echo "3 - ";
        echo $msg;
    } else {
        echo "3 - ";
        echo $error;
    }