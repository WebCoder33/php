<?php

class tariffGenerator {

    public function generateTariff() {

        $tariff = ['Космос','Удача','Фарт','Село','Звезда','Встреча'];
        
        return $tariff[array_rand($tariff, 1)];
    }

}

?>