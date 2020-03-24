<?php

class Tank {
    public $name;
    public $piercing;
    public $speed;
    
    public function __construct($name, $speed, $piercing) {
        $this->name = $name;
        $this->piercing = $piercing;
        $this->speed = $speed;
    }
}

?>