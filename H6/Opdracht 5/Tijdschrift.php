<?php
include_once "IPrototype.php";
class Tijdschrift implements IPrototype
{
    protected $genre;
    protected $titel;
    protected $auteur;
    protected $prijs;
    //constructor
    public function __construct(
        string $genre,
        string $titel,
        string $auteur,
        float $prijs
    ) {
        $this->genre = $genre;
        $this->titel = $titel;
        $this->auteur = $auteur;
        $this->prijs = $prijs;
    }
    public function getSpecs()
    {
        echo sprintf("Specs:&nbsp; Genre:$this->genre&nbsp; Titel:$this->titel&nbsp; Auteur:$this->auteur&nbsp; Prijs:$this->prijs&nbsp;<br>\n",
        $this->genre, $this->titel, $this->auteur, $this->prijs);
    }
    public function setPrijs(float $prijs)
    {
        $this->prijs = $prijs;
    }
    function __clone(){}
}