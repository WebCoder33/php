<?php

class Application {

    private $users;

    public function __construct() {
    
            $this->users = $this->requestUsers();
        
    }

    private function requestUsers() {

        return $users = [ 
            ['Сидоров', 'Валентин', 'Иванович', 23],
            ['Макаров', 'Петр', 'Петрович', 35],
            ['Михайлов', 'Изяслав', 'Бананович', 43],
        ];

    }

    protected function getSurnameAndInitials($user) {

            $lastName = $user[0];
            $firstLetterName = mb_substr($user[1],0,1,'utf-8');
            $firstLetterMiddleName = mb_substr($user[2],0,1,'utf-8');

            return $lastName.' '.$firstLetterName.'. '.$firstLetterMiddleName.'.';

    }

    protected function generateUsersDataList($users) {

        $usersDataList = [];
        $dummy = '(г.Урюпинск, Гвардейская ул., д. 4) {250 - Дача, 257 - Будущее}';

        for ($i = 0; $i < count($users); $i++) {
        
            $usersDataList[$i] = $this->getSurnameAndInitials($users[$i]).' '.$dummy;

        }

        return $usersDataList;

    }

    public function getUsersDataList() {

        return $this->generateUsersDataList($this->users);

    }


}

?>