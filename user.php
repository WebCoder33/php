<?php

require_once 'person.php';
require_once 'address.php';

class User {

    protected $userData = [
        'person' => '', 
        'address' => '',
        'contract' => ''
    ];

    public function __construct($array) {

        $this->userData['person'] = new Person($array['person']);
        $this->userData['address'] = new Address($array['address']);
        $this->userData['contract'] = $array['contract'];

    }

    public function getUserData() {

        return $this->userData;

    }

}


?>