<?php

class cityGenerator {

    public function generateCity() {

        $city = ['Москва','Псков','Орел','Курск','Киров','Великие-Луки', 'Новосокольники'];
        
        return $city[array_rand($city, 1)];
    }

}

?>