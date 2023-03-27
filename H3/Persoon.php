<?php
    class Persoon
    {
        public $naam;
        private $leeftijd;
        protected $geslacht;
        public $isStudent;
        public $gemCijfer;

        // constuctor methode
        function __construct(string $naam, int $leeftijd, string $geslacht)
        {
            $this->naam = $naam;
            $this->leeftijd = $leeftijd;
            $this->geslacht = $geslacht;
            echo "<br>\n Nieuw object van persoon is aangemaakt";
            echo "\n De property naam is " , $this->naam;
        }

        function __destruct()
        {
            echo "<br>\n Het object $this->naam wordt verweidert";
        }

        //Geslacht
        public function setGeslacht(string $geslacht)
        {
            $this->geslacht = $geslacht;
        }

        public function getGeslacht()
        {
            return $this->geslacht;
        }

        //Naam
        public function setNaam(string $naam)
        {
            $this->naam = $naam;
        }

        public function getNaam()
        {
            return $this->naam;
        }

        //Leeftijd
        public function setLeeftijd(string $leeftijd)
        {
            $this->leeftijd = $leeftijd;
        }

        public function getLeeftijd()
        {
            return $this->leeftijd;
        }

        //IsStudent
        public function setIsStudent(bool $isStudent)
        {
            $this->isStudent = $isStudent;
        }

        public function getIsStudent()
        {
            return $this->isStudent;
        }

        //GemiddeldCijfer
        public function setGemiddeldCijfer(float $gemCijfer)
        {
            $this->gemCijfer = $gemCijfer;
        }

        public function getGemiddeldCijfer()
        {
            return $this->gemCijfer;
        }

        //Gegevens
        function getGegevens()
        {
            $gegevens =
                "\nDe gegevens van " . $this->naam . " zijn: " .
                "<br>\nLeeftijd: " . $this->leeftijd .
                "<br>\nGeslacht: " . $this->geslacht;
            return $gegevens;

        }

        // override toString() en print klasse gegevens
        function toString()
        {
            return ("<br>\nDe gegevens van " . $this->naam . " zijn: " .
            "<br>\nLeeftijd: " . $this->leeftijd .
            "<br>\nGeslacht: " . $this->geslacht . "<br>");
        }

        //Gegevens Opslaan
        public function gegevensOpslaan()
        {
            $array = [];
            $array[0] = $this->getNaam();
            $array[1] = $this->getLeeftijd();
            $array[2] = $this->getGeslacht();
            $array[3] = $this->getIsStudent();
            $array[4] = $this->getGemiddeldCijfer();
            return $array;
        }
    }

