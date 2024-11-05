<?php

    class Calculadora {
        
        function somar($a, $b) {
            return $a + $b;
        }
        
        function subtrair($a, $b) {
            return $a - $b;
        }
        
        function multiplicar($a, $b) {
            return $a * $b;
        }
        
        function dividir($a, $b) {
            return $a / $b;
        }
    }
    
    $calc = new Calculadora();
    
    echo $calc->somar(10, 10) . "<br>";
    
    echo $calc->subtrair(10, 10) . "<br>";
    
    echo $calc->multiplicar(10, 10) . "<br>";
    
    echo $calc->dividir(10, 10) . "<br>";