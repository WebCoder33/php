<?php

require_once 'user.php';
require_once 'person.php';
require_once 'address.php';
require_once 'contract.php';

class Application {

    private $users;

    public function __construct() {
    
            $this->users = $this->requestUsers();
        
    }

    private function requestUsers() {

        $user1 = new User(
            [
            'person' => new Person(['Макаров', 'Петр', 'Петрович', 35]),
            'address' => new Address(['Урюпинск', 'ул','Гвардейская', 6]),
            'contracts' => [new Contract(['250/750', 'Мафия', 300]), new Contract(['250/300', 'Сычужный', 250])]
            ]
        ); 
        $user2 = new User(
            [
            'person' => new Person(['Михайлов', 'Изяслав', 'Бананович', 43]),
            'address' => new Address(['Минск', 'ул','Гвардейская', 9]),
            'contracts' => [ new Contract(['250/56', 'Город', 300]), new Contract([257, 'Будущее', 300]) ] 
            ]
        );
        $user3 = new User(
            [
            'person' => new Person(['Скворцов', 'Майкл', 'Дитрихович', 23]),
            'address' => new Address(['Волгоград', 'пр', 'Ленина', 81]),
            'contracts' => [new Contract(['250/890', 'Село', 300])] 
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

            $personInitials = $array['person']->getString_SurnameAndInitials();
            $addressString = $array['address']->getString_CityStreetHome();
            $contractString = $this->getContractsString($array['contracts']);

            $usersDataList[] = $personInitials.' '.$addressString.' '.$contractString;

        }

        return $usersDataList;

    }

    protected function getContractsString($contarcts) {

        $contractString = '{';

        foreach ($contarcts as $value) {
            $contractString .= $value->getString_contractNumberTariff().', ';
        }

        return substr($contractString,0,-2).'}';

    }

    public function getUsersDataList() {

        return $this->generateUsersDataList($this->users);

    }


}

?>