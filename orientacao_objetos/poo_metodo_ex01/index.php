<?php 

    class Cachorro {

        function latir() {
            echo "Au au <br>";
        }

        function andar($m) {
            echo "O cachorro andou $m metro(s) <br>";
        }

    }

    $husky = new Cachorro();
    $husky->latir();
    $husky->andar(12);

    $golden = new Cachorro();
    $golden->latir();
    $golden->andar(1);