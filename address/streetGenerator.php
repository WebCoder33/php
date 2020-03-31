<?php

class streetGenerator {

    public function generateTypeStreet() {

        $typeStreet = ['ул', 'пр-т', 'проезд','переулок'];
        
        return $typeStreet[array_rand($typeStreet, 1)];
    }

    public function generateStreet() {

        $street = ['Ленина','Некрасова','Ботвина','Заслонова'];
        
        return $street[array_rand($street, 1)];
    }

}

?>