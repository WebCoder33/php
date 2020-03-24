<?php

class checkList {
    public $tanks;
    public $armorList;
    
    public function __construct($tanks, $armorList) {
        $this->tanks = $tanks;
        $this->armorList = $armorList;
    }
    
    private function render($counter, $tanksList, $armor) {
        
        arsort($tanksList);
            
            if ( $counter == 0) {
                return;
            } elseif ( $counter == 1 ) { 
                foreach($tanksList as $x => $x_value) {
                    $name = $x;
                    $speed = $x_value;
                }
                echo 'Чтобы пробить броню толщиной '.$armor.' мм нужен танк марки '.$name.', со скоростью перемещения '.$speed.' км/ч'.";\n";
            } elseif ( $counter > 1 ) {
                $names = '';
                foreach($tanksList as $x => $x_value) {
                    $names .= 'Модель '.$x.' ('.$x_value.' км/ч), ';
                }
                echo 'Чтобы пробить броню толщиной '.$armor.' мм подойдет любой из этих танков: '.substr($names,0,-2).";\n";
            }
    }
    
    public function getTanksCrashesArmor() {
        
        $armorList = $this->armorList;
        $tanks = $this->tanks;
        
        foreach ($armorList as $x => $x_value) {
            
                $armor = $x_value;
                $tanksList = [];
                $counter = 0;
                
                foreach($tanks as $x => $x_value) {
                    
                    $tankSpeed = $x_value->speed;
                    $tankPiercing = $x_value->piercing;
                    $tankName = $x_value->name;
                    
                    if ( $tankPiercing >= $armor ) {
                        $counter++;
                        $tanksList[$tankName] = $tankSpeed;
                    }
                }
                
                $this->render($counter, $tanksList, $armor);
            }
    }
    
}

?>
