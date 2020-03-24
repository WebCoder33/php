<?php 

require_once 'classTank.php';
require_once 'classCheckList.php';


$tanks = [
    $test1 = new Tank('ТП-41', 80, 10),
    $test2 = new Tank('ТП-32', 60, 20),
    $test3 = new Tank('КП-0070', 70, 8),
    $test4 = new Tank('ТШ-605', 90, 5),
    $test5 = new Tank('ТШ-607', 90, 7),
    $test6 = new Tank('ТТ-22', 40, 20),
    $test7 = new Tank('ТТ-25', 40, 50)
         ];

$armor = [2,7,5,15,30,1,54,12];
    

$firstLoadsList = new checkList($tanks, $armor);
$firstLoadsList->getTanksCrashesArmor();

?>
