<?php

class Contract {

    protected $contract = [
        'number' => 'Null',
        'tariff' => 'Null',
        'payment' => 0
    ];

    public function __construct($dataArray) {
        
        $this->getDataFromArray($dataArray);

    }

    protected function getDataFromArray($dataArray) {

        $counter = 0;

        foreach ( $this->contract as $key => $value ) {
            if ($counter >= count($dataArray)) {
                break;
            }
            if (!$this->checkEqualityTypes($this->contract[$key], $dataArray[$counter])) {
                $counter++;
                continue;
            }
            $this->contract[$key] = $dataArray[$counter];
            $counter++;
        }

    }
    
    protected function checkEqualityTypes($firstValue, $secondValue) { 

        if (gettype($firstValue) == gettype($secondValue)) {
            return true;
        };
        
    }

    public function getString_contractNumberTariff() {

        $contractNumber = $this->contract['number'];
        $tariff = $this->contract['tariff'];

        return $contractNumber.' - '.$tariff;

    }

    public function getAddressData() {

        return $this->address;

    }

}

?>