<?php

require_once 'user.php';
require_once 'person.php';
require_once 'address.php';
require_once 'contract.php';
require_once 'peopleGenerator.php';
require_once 'addressGenerator.php';


class Application {

    private $users;

    public function __construct() {
    
            $this->users = $this->requestUsers();
        
    }

    private function requestUsers() {

        $peopleGenerator = new peopleGenerator();
        $addressGenerator = new addressGenerator();
        

        return $users = [ 
            $user1 = new User(
                [
                'person' => $peopleGenerator->generatePerson(),
                'address' => $addressGenerator->generateAddress(),
                'contracts' => [new Contract(['250/750', 'Мафия', 300]), new Contract(['250/300', 'Сычужный', 250])]
                ]
                ),
            $user2 = new User(
                [
                'person' => $peopleGenerator->generatePerson(),
                'address' => $addressGenerator->generateAddress(),
                'contracts' => [ new Contract(['250/56', 'Город', 300]), new Contract([257, 'Будущее', 300]) ] 
                ]
                ),
            $user3 = new User(
                [
                'person' => $peopleGenerator->generatePerson(),
                'address' => $addressGenerator->generateAddress(),
                'contracts' => [new Contract(['250/890', 'Село', 300])] 
                ]
                ),
            $user4 = new User(
                [
                'person' => $peopleGenerator->generatePerson(),
                'address' => $addressGenerator->generateAddress(),
                'contracts' => [new Contract(['250/890', 'Село', 300])] 
                ]
                )

        ];

    }

    public function getUsersDataList() {

        return $this->generateUsersDataList($this->users);

    }

    protected function generateUsersDataList($users) {

        $usersDataList = [];

        foreach ($users as $value) {

            $personInitials = $value->userData['person']->getString_SurnameAndInitials();
            $addressString = $value->userData['address']->getString_CityStreetHome();
            $contractsString = $this->getContractsString($value->userData['contracts']);

            $usersDataList[] = $personInitials.' '.$addressString.' '.$contractsString;

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


}

?>