<?php

class User {

    protected $userData = [
        'person' => '', 
        'address' => '',
        'contracts' => ''
    ];

    public function __construct($array) {

        $this->userData['person'] = $array['person'];
        $this->userData['address'] = $array['address'];
        $this->userData['contracts'] = $array['contracts'];

    }
    

    public function getUserData() {

        return $this->userData;

    }

}


?>