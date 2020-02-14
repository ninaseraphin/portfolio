<?php

class Controlleur{
    protected $manager;
    protected $vue;
    
    public function __construct(){
        $this->manager = new Manager();
        $this->vue = new Vue();
    }
}

?>