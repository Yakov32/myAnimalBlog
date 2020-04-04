<?php
class Locator{
    private $services = array();

    public function __construct($ServicesArr){
        
        foreach($ServicesArr as $service){
            $this->services[$service] = new $service;
        }
    }

    public function getServices(){
        return $this->services;
    }
}
?>