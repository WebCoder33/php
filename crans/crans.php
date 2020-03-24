<?php 

require_once 'classCran.php';
require_once 'classCranLoad.php';
require_once 'classCheckList.php';


$crans = [
    $cran1 = new Cran('КП-1550', 50, 12),
    $cran2 = new Cran('КП-0042', 42, 12),
    $cran3 = new Cran('КП-0070', 70, 8),
    $cran4 = new Cran('КПМ-0215', 15, 25),
    $cran5 = new Cran('КПМ-0215', 15, 25),
    $cran6 = new Cran('КПМ-0315', 15, 26),
    $cran7 = new Cran('КПМ-0220', 20, 20)
         ];
        
$loads = [
    $load1 = new cranLoad(20, 10),
    $load2 = new cranLoad(15, 20),
    $load3 = new cranLoad(rand(10,60), rand(10,30)),
         ];
    

$firstLoadsList = new checkList($crans, $loads);
$firstLoadsList->getCransForLoads();

?>
