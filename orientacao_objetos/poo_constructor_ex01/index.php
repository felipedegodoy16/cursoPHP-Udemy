<?php 

    class Cachorro {
        public $nome, $raca, $cor;

        function __construct($nome, $raca, $cor) {
            $this->nome = $nome;
            $this->raca = $raca;
            $this->cor = $cor;
        }

        function apresentarDog() {
            echo "Olá, meu nome é $this->nome, sou da raça $this->raca e sou $this->cor <br>";
        }
    }

    $dog = new Cachorro("Apollo", "Husky", "Branco e Preto");

    $dog->apresentarDog();