<?php
include "Shoppingcart.php";
class Myshoppingcart extends Shoppingcart
{
    public function printCart()
    {
        // print alle items in shoppingcart
        echo sprintf(
            "%-10s %-20s %10s %6s<br>\n",
            "Product &nbsp;",
            "Omschrijving &nbsp;",
            "Prijs &nbsp;",
            "Aantal &nbsp;"
        );
        foreach ($this->shoppingcart as $item) {
            echo sprintf(
                "%-10s %-20s %10.2f %6d<br>\n",
                $item->getId(),
                $item->getOmschrijving(),
                $item->getPrijs(),
                $item->getAantal()
            );
        }
    }

    function somTotaal() 
    {
        $totaal = 0;
        foreach ($this->shoppingcart as $item) {
            $totaal += $item->getPrijs() * $item->getAantal();
        }
        return $totaal;
    }
}