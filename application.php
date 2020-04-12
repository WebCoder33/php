<?php

require_once 'user.php';
require_once 'person/peopleGenerator.php';
require_once 'address/addressGenerator.php';
require_once 'contract/contractGenerator.php';


class Application {  

    private $users;

    public function __construct() {
    
            $this->users = $this->createUsers();
	        
    }

    private function createUsers() {

        $peopleGenerator = new peopleGenerator();
        $addressGenerator = new addressGenerator();
        $contractGenerator = new contractGenerator();

        $users = [];

        for ( $i = 0 ; $i < 4 ; $i++ ) {
            $users[] = new User(
                [
                'person' => $peopleGenerator->generatePerson(),
                'address' => $addressGenerator->generateAddress(),
                'contracts' => [$contractGenerator->generateContract(), $contractGenerator->generateContract()]
                ]
                );
        }

        return $users; 

    }

    public function getUsersDataList() {

        return $this->generateUsersDataList();

    }

    private function generateUsersDataList() {

        $usersDataList = [];

        foreach ($this->users as $user) {

            $personInitials = $user->userData['person']->getStringSurnameAndInitials();
            $addressString = $user->userData['address']->getStringCityStreetHome();
            $contractsString = $this->getContractsString($user->userData['contracts']);

            $usersDataList[] = $personInitials.' '.$addressString.' '.$contractsString;

        }

        return $usersDataList;

    }

    private function getContractsString($contarcts) {

        $contractsString = '{';

        foreach ($contarcts as $contract) {
            $contractsString .= $contract->getStringContractNumberAndTariff().', ';
        }

        return substr($contractsString,0,-2).'}';

    }


}

?>
