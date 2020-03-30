<?php

require_once 'user.php';
require_once 'person.php';
require_once 'address.php';
require_once 'contract.php';
require_once 'peopleGenerator.php';
require_once 'addressGenerator.php';
require_once 'contractGenerator.php';


class Application {

    private $users;

    public function __construct() {
    
            $this->users = $this->requestUsers();
        
    }

    private function requestUsers() {

        $peopleGenerator = new peopleGenerator();
        $addressGenerator = new addressGenerator();
        $contractGenerator = new contractGenerator();
        

        return $users = [ 
            $user1 = new User(
                [
                'person' => $peopleGenerator->generatePerson(),
                'address' => $addressGenerator->generateAddress(),
                'contracts' => [$contractGenerator->generateContract(), $contractGenerator->generateContract()]
                ]
                ),
            $user2 = new User(
                [
                'person' => $peopleGenerator->generatePerson(),
                'address' => $addressGenerator->generateAddress(),
                'contracts' => [ $contractGenerator->generateContract(), $contractGenerator->generateContract() ] 
                ]
                ),
            $user3 = new User(
                [
                'person' => $peopleGenerator->generatePerson(),
                'address' => $addressGenerator->generateAddress(),
                'contracts' => [$contractGenerator->generateContract()] 
                ]
                ),
            $user4 = new User(
                [
                'person' => $peopleGenerator->generatePerson(),
                'address' => $addressGenerator->generateAddress(),
                'contracts' => [$contractGenerator->generateContract(),$contractGenerator->generateContract(),$contractGenerator->generateContract(),$contractGenerator->generateContract()] 
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