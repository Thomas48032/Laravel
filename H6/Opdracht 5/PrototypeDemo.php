<?php
include "Boek.php";
include "Tijdschrift.php";
$boek = new Boek("Boek", "Inleiding UML", "Ali Smit", 30);
$boekKloon = clone $boek;
echo $boekKloon->getSpecs();
$tijdschrift = new Tijdschrift("Tijdschrift", "Mac Magazine", "Verschillende", 3);
$tijdschriftKloon = clone $tijdschrift;
echo $tijdschriftKloon->getSpecs();