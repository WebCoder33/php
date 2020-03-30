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
            $this->contract[$key] = $dataArray[$counter];
            $counter++;
        }

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