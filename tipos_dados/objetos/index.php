<?php 

    class Pessoa {

        public $nome;

        function falar() {
            echo "Olá pessoal <br>";
        }
    }

    $felipe = new Pessoa();

    $felipe->nome = 'Felipe';

    echo $felipe->nome;

    echo "<br>";

    $felipe->falar();