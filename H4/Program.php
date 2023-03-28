<?php
include 'Persoon.php';
include 'User.php';
$persoon1 = new User("jaap", 18, "Meneer", "test@mail", "ww", "baas");
$persoon2 = new User("gerret", 20, "Meneer", "test@mail", "ww", "baas");
$Ton = new User("Ton", 16, "Meneer", "test@mail", "ww", "baas");

$persoon2->setLeeftijd(21);
echo "<br>\nDe leeftijd van ". $persoon2->getNaam() . " is ". $persoon2->getLeeftijd();

echo "<br>\n".gettype((Object) $persoon2->getLeeftijd());
echo "<br>\n".gettype((Object) $persoon2->getGeslacht());
echo "<br>\n".gettype((Object) $persoon2->getGemiddeldCijfer());

echo "<br>\n". $persoon1->getGegevens();
echo "<br>\n". $persoon2->getGegevens();

echo $persoon2->toString();

$gegevensPersoon1 = $persoon1->gegevensOpslaan();
print_r($gegevensPersoon1);
 
echo "<br>";

$gegevensTon = $Ton->gegevensOpslaan();
print_r($gegevensTon);

echo "<br>\n". $persoon1->getNaam();

?>