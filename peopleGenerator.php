<?php

require_once 'person.php';

class peopleGenerator {

    public function generatePerson() {

        $surname = ['Путин','Греф','Чубайс','Иванов','Петров','Сидоров', 'Мишустин'];
        $name = ['Иван', 'Петр', 'Степан','Василий','Арнольд','Дмитрий'];
        $patronimyc = ['Арнольдович','Степанович','Владимирович','Святославович'];

        return new Person([
            $surname[array_rand($surname, 1)], 
            $name[array_rand($name, 1)], 
            $patronimyc[array_rand($patronimyc, 1)], 
            rand(25,60)
            ]);
    }

}

?>