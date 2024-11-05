<?php 

    class Passenger {
        public $name, $age, $seatNumber; 

        function __construct($name, $age, $seatNumber) {
            $this->name = $name;
            $this->age = $age;
            $this->seatNumber = $seatNumber;
        }

        function getName() {
            return $this->name;
        }

        function getAge() {
            return $this->age;
        }

        function getSeatNumber() {
            return $this->seatNumber;
        }

        function setSeatNumber($seatNumber) {
            $this->seatNumber = $seatNumber;
        }
    }

    $pass = new Passenger("João", 29, 1);

    $pass->setSeatNumber(2);

    echo $pass->getName() . "<br>";
    echo $pass->getAge() . "<br>";
    echo $pass->getSeatNumber() . "<br>";