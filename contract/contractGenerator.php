<?php

require_once 'contract.php';
require_once 'tariffGenerator.php';

class contractGenerator {

    public function generateContract() {

        $tariffGenerator = new tariffGenerator();

        $tariff = $tariffGenerator->generateTariff();

        return new Contract([
            sprintf("%'06d", rand(123,1300)), 
            $tariff, 
            rand(250,1500)
            ]);
    }

}

?>