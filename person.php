<?php

class Person {

    protected $person = [
                'lastName' => 'Null',
                'name' => 'Null',
                'middleName' => 'Null',
                'age' => 0
            ];

    public function __construct($array) {

        $this->getDataFromArray($array);

    }

    protected function getDataFromArray($dataArray) {

        $counter = 0;

        foreach ( $this->person as $key => $value ) {
            if ($counter >= count($dataArray)) {
                break;
            }
            $this->person[$key] = $dataArray[$counter];
            $counter++;
        }

    }
    
    public function getString_SurnameAndInitials() {

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