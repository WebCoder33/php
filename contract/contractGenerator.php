<?php

require_once 'contract.php';

class contractGenerator {

    public function generateContract() {

        $tariff = ['Космос','Удача','Фарт','Село','Звезда','Встреча'];

        return new Contract([
            sprintf("%'06d", rand(123,1300)), 
            $tariff[array_rand($tariff, 1)], 
            rand(250,1500)
            ]);
    }

}

?>