<?php

class patronymicGenerator {

    public function generatePatronymic() {

        $patronymic = ['Арнольдович','Степанович','Владимирович','Святославович'];
        
        return $patronymic[array_rand($patronymic, 1)];
    }

}

?>