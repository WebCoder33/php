<?php

class nameGenerator {

    public function generateName() {

        $name = ['Иван', 'Петр', 'Степан','Василий','Арнольд','Дмитрий'];
        
        return $name[array_rand($name, 1)];
    }

}

?>