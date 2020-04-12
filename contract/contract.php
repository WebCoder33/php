<?php

class Contract {

    private $contract = [
        'number' => 'Null',
        'tariff' => 'Null',
        'payment' => 0
    ];

    public function __construct($dataArray) {
        
        $this->getDataFromArray($dataArray);

    }

    private function getDataFromArray($dataArray) {
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
    
    private function checkEqualityTypes($firstValue, $secondValue) {
        if (gettype($firstValue) == gettype($secondValue)) {
            return true;
        }
		return false;
    }

    public function getStringContractNumberAndTariff() {
        $contractNumber = $this->contract['number'];
        $tariff = $this->contract['tariff'];
        return $contractNumber.' - '.$tariff;
    }

    public function getAddressData() {

        return $this->contract;

    }

}

?>