<?php
//class Crans

class Cran {
    public $name;
    public $capacity;
    public $jib;
    
    public function __construct($name, $capacity, $jib) {
        $this->name = $name;
        $this->jib = $jib;
        $this->capacity = $capacity;
    }
}

?>