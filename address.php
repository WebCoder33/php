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
            $this->address[$key] = $dataArray[$counter];
            $counter++;
        }

    }

    public function getString_CityStreetHome() {

        $City = $this->address['city'];
        $StreetFormat = $this->address['streetFormat'];
        $Street = $this->address['street'];
        $Home = $this->address['home'];

        return '(г.'.$City.', '.$StreetFormat.'.'.$Street.', д.'.$Home.')';

    }

    public function getAddressData() {

        return $this->address;

    }

}

?>