<?php
class Inloggen {
    private static $instance = null;
    private $token;
  
    private function __construct() 
    {
        // genereer een random token
        $this->token = uniqid(); 
    }
  
    public static function getInstance() 
    {
        if (self::$instance == null) 
        {
        self::$instance = new Inloggen();
        }
        return self::$instance;
    }
  
    public function getToken() 
    {
        return $this->token;
    }
  }