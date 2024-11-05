<?php 

    class Humano {
        public $nome, $idade;

        public function falar() {
            echo "Olá eu sou um humano <br>";
        }
    }

    class Professor extends Humano {
        public $curso = "Matemática", $salario;

        public function estaLecionando() {
            echo "O professor está dando aula de $this->curso <br>";
        }
    }

    $marcos = new Humano();

    $marcos->falar();

    $joao = new Professor();

    $joao->falar();
    echo $joao->curso . "<br>";