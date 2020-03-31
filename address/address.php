<?php

class Address {

    protected $address = [
        'city' => 'Null',
        'streetFormat' => 'Null',
        'street' => 'Null',
        'home' => 0,
        'building' => 0,
        'apartment' => 0
    ];

    public function __construct($dataArray) {
        
        $this->getDataFromArray($dataArray);

    }

    protected function getDataFromArray($dataArray) {

        $counter = 0;

        foreach ( $this->address as $key => $value ) {

            if ($counter >= count($dataArray)) {
                break;
            }

            if (!$this->checkEqualityTypes($this->address[$key], $dataArray[$counter])) {
                $counter++;
                continue;
            }

            $this->address[$key] = $dataArray[$counter];
            $counter++;
            
        }

    }

    protected function checkEqualityTypes($firstValue, $secondValue) { 

        if (gettype($firstValue) == gettype($secondValue)) {
            return true;
        };
        
    }

    public function getString_CityStreetHome() {

        $city = $this->address['city'];
        $streetFormat = $this->address['streetFormat'];
        $street = $this->address['street'];
        $home = $this->address['home'];

        return '(г.'.$city.', '.$streetFormat.'.'.$street.', д.'.$home.')';

    }

    public function getAddressData() {

        return $this->address;

    }

}

?>