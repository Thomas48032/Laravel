<?php
include 'Persoon.php';

$persoon1 = new Persoon("jaap", 18, "M");
$persoon2 = new Persoon("gerret", 20, "M");
$Ton = new Persoon("Ton", 16, "M");

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

?>