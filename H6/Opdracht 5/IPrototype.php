<?php

interface IPrototype
{
    public function getSpecs();
    
    public function __clone();
}

?>