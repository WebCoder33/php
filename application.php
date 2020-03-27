<?php

class Application {

    private $usersList = 'Смирнов И. О. (г.
    Урюпинск, Гвардейская ул., д. 4) {256 - Удача,
    257 - Будущее}';

    public function getAllUsers() {

        return $this->usersList;

    }

}

?>