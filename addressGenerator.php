<?php

require_once 'address.php';

class addressGenerator {

    public function generateAddress() {

        $city = ['Москва','Псков','Орел','Курск','Киров','Великие-Луки', 'Новосокольники'];
        $typeStreet = ['ул', 'пр-т', 'проезд','переулок'];
        $street = ['Ленина','Некрасова','Ботвина','Заслонова'];

        return new Address([
            $city[array_rand($city, 1)], 
            $typeStreet[array_rand($typeStreet, 1)], 
            $street[array_rand($street, 1)], 
            rand(1,80),
            rand(25,60),
            rand(1,118)
            ]);
    }

}

?>