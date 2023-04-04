<?php
include "Singleton.php";

$inloggen = Inloggen::getInstance();
echo "Inlogtoken: " . $inloggen->getToken();