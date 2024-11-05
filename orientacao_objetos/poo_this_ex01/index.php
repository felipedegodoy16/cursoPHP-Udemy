<?php 

    class Carro {
        public $marca, $motor, $portas, $vel_max;

        function setVelMax($vel) {
            $this->vel_max = $vel;
        }

        function getVelMax() {
            echo "A velocaidade máxima deste carro é: " . $this->vel_max . "km/h <br>";
        }
    }

    $c1 = new Carro();

    $c1->marca = "BMW";

    $c1->setVelMax(200);

    $c1->getVelMax();

