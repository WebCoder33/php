<?php

require_once 'user.php';

class Application {

    private $users;

    public function __construct() {
    
            $this->users = $this->requestUsers();
        
    }

    private function requestUsers() {

        $user1 = new User(
            [
            'person' => ['Макаров', 'Петр', 'Петрович', 35],
            'address' => '(г.Урюпинск, Гвардейская ул., д. 4)',
            'contract' => '{250 - Дача, 257 - Будущее}' 
            ]
        );
        $user2 = new User(
            [
            'person' => ['Михайлов', 'Изяслав', 'Бананович', 43],
            'address' => '(г.Минск, Гвардейская ул., д. 4)',
            'contract' => '{250 - Город, 257 - Будущее}' 
            ]
        );
        $user3 = new User(
            [
            'person' => ['Скворцов', 'Майкл', 'Дитрихович', 23],
            'address' => '(г.Волгоград, Гвардейская ул., д. 4)',
            'contract' => '{250 - Село, 257 - Будущее}' 
            ]
        );

        return $users = [ 
            $user1->getUserData(),
            $user2->getUserData(),
            $user3->getUserData()
        ];

    }

    protected function generateUsersDataList($users) {

        $usersDataList = [];

        foreach ($users as $array) {
            $usersDataList[] = $array['person']->getSurnameAndInitials().' '.$array['address'].' '.$array['contract'];

        }

        return $usersDataList;

    }

    public function getUsersDataList() {

        return $this->generateUsersDataList($this->users);

    }


}

?>