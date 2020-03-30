<?php

require_once 'application.php';

$application = new Application();

foreach ($application->getUsersDataList() as $line) {
    echo $line."<br>";
};

?>