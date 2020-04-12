<?php

require_once 'address.php';
require_once 'cityGenerator.php';
require_once 'streetGenerator.php';

class addressGenerator {

    public function generateAddress() {

        $cityGenerator = new cityGenerator();
        $streetGenerator = new streetGenerator();

        $city = $cityGenerator->generateCity();
        $typeStreet = $streetGenerator->generateTypeStreet();
        $street = $streetGenerator->generateStreet();

        return new Address([
            $city, 
            $typeStreet, 
            $street, 
            rand(1,80),
            rand(25,60),
            rand(1,118)
            ]);
    }

}

?>