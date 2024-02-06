<?php

    class Passenger {
        public $name;
        public $age;
        public $seatNumber;

        public function __construct($name, $age, $seatNumber) {
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