<?php

class Person {

    private $person = [
                'lastName' => '',
                'name' => '',
                'middleName' => '',
                'age' => 0
            ];

    public function __construct($array) {

        $this->person['lastName'] = $array[0];
        $this->person['name'] = $array[1];
        $this->person['middleName'] = $array[2];
        $this->person['age'] = $array[3];

    }
    
    public function getSurnameAndInitials() {

        $lastName = $this->person['lastName'];
        $firstLetterName = mb_substr($this->person['name'],0,1,'utf-8');
        $firstLetterMiddleName = mb_substr($this->person['middleName'],0,1,'utf-8');

        return $lastName.' '.$firstLetterName.'. '.$firstLetterMiddleName.'.';

    }

    public function getPersonData() {

        return $this->person;

    }

}

?>