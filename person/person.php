<?php

class Person {

    protected $person = [
                'lastName' => '-',
                'name' => '-',
                'middleName' => '-',
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
            }; 

            if (!$this->checkEqualityTypes($this->person[$key], $dataArray[$counter])) {
                $counter++;
                continue;
            }

            $this->person[$key] = $dataArray[$counter];
            $counter++;
            
        }

    }

    protected function checkEqualityTypes($firstValue, $secondValue) {
        if (gettype($firstValue) == gettype($secondValue)) {
            return true;
        }
        return false;
    }
    
    public function getStringSurnameAndInitials() {


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