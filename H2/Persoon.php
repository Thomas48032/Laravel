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
            echo "\n Nieuw object van persoon is aangemaakt";
            echo "\n De property naam is " , $this->naam;
        }

        function __destruct()
        {
            echo "\n Het object $this->naam wordt verweidert";
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
            "\n"
        }
    }
