<?php
class Singleton
{
    private static $instance;
    private static $version = "1.0";
    public static function getInstance()
    {
        if (!self::$instance) {
            // als geen instance dan maak instance
            self::$instance = new self();
        }
        return self::$instance;
    }
    public static function getVersion() 
    {
        return self::$version;
    }
    // constructor()-methode deactiveren
    private function __construct() {}
    // kloon-optie deactiveren
    private function __clone() {}
}