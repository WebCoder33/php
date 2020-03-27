<?php

require_once 'person.php';

class User {

    private $userData = [
        'person' => '', 
        'address' => '',
        'contract' => ''
    ];

    public function __construct($array) {

        $this->userData['person'] = new Person($array['person']);
        $this->userData['address'] = $array['address'];
        $this->userData['contract'] = $array['contract'];

    }

    public function getUserData() {

        return $this->userData;

    }

}


?>