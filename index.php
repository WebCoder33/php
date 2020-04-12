<?php

require_once 'application.php';

$application = new Application();

echo "<h2> Рандомная генерация данных: </h2> <br>";

foreach ($application->getUsersDataList() as $line) {
    echo $line."<br>";
}


