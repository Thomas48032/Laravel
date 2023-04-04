<?php
class Item
{
    private $id;
    private $merk;
    private $omschrijving;
    private $prijs;
    private $aantal;
    private $model;

    function __construct($id, $merk, $omschrijving, $prijs, $aantal)
    {
        $this->id = $id;
        $this->merk = $merk;
        $this->omschrijving = $omschrijving;
        $this->prijs = $prijs;
        $this->aantal = $aantal;
    }

    // andere methodes van de Item-klasse

    function __destruct()
    {
        // voer de benodigde acties uit
        echo ("<br>\nItem $this->id wordt verwijderd");
    }

    // getters en setters

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setMerk(string $merk)
    {
        $this->merk = $merk;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setPrijs(string $prijs)
    {
        try {
            $prijs = floatval($prijs);
            if ($prijs == 0) {
                throw new InvalidArgumentException("Prijs mag niet 0 zijn");
            }
            $this->prijs = $prijs;
        } catch (InvalidArgumentException $e) {
            echo "Fout: " . $e->getMessage();
        }
    }

    public function getPrijs()
    {
        return $this->prijs;
    }

    public function setAantal(string $aantal)
    {
        $this->aantal = $aantal;
    }

    public function getAantal()
    {
        return $this->aantal;
    }

    public function setOmschrijving(string $omschrijving)
    {
        $this->omschrijving = $omschrijving;
    }

    public function getOmschrijving()
    {
        return $this->omschrijving;
    }
}