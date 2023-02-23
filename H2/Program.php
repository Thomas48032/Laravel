<?php
include 'Persoon.php';

$persoon1 = new Persoon("jaap", 18, "M");
$persoon2 = new Persoon("gerret", 20, "M");

$persoon2->setLeeftijd(21);

echo "\nDe leeftijd van ". $persoon2->getNaam() . " is ". $persoon2->getLeeftijd();

echo "\n".gettype((Object) $persoon2->getLeeftijd());