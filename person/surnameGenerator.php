<?php

class surnameGenerator {

    public function generateSurname() {

        $surname = ['Путин','Греф','Чубайс','Иванов','Петров','Сидоров', 'Мишустин'];
        
        return $surname[array_rand($surname, 1)];
    }

}

?>