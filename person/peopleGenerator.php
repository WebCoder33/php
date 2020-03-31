<?php

require_once 'person.php';
require_once 'surnameGenerator.php';
require_once 'nameGenerator.php';
require_once 'patronymicGenerator.php';

class peopleGenerator {

    public function generatePerson() {

        $surnameGenerator = new surnameGenerator();
        $nameGenerator = new nameGenerator();
        $patronimycGenerator = new patronymicGenerator();

        $surname = $surnameGenerator->generateSurname();
        $name = $nameGenerator->generateName();
        $patronimyc = $patronimycGenerator->generatePatronymic();

        return new Person([
            $surname, 
            $name, 
            $patronimyc, 
            rand(25,60)
            ]);
    }

}

?>