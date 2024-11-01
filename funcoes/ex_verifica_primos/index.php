<?php 

    function isPrime($valor) {
        if($valor < 2) {
            return false;
        }

        for($i = 2; $i <= sqrt($valor); $i++) {
            if($valor % $i == 0) {
                return false;
            }
        }

        return true;
    }

    echo isPrime(5) . "<br>";
    echo isPrime(10) . "<br>";