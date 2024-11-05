<?php 

    class Pessoa {
        public $idade, $nome;

        function andar($m) {
            echo "Você andou $m metros <br>";
        }
    }

    $matheus = new Pessoa();
    $matheus->nome = "Matheus";
    $matheus->idade = 29;

    echo "O nome dele é $matheus->nome e tem $matheus->idade anos <br>";

    $matheus->andar(15);