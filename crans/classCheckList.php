<?php

class checkList {
    public $crans;
    public $loads;
    
    public function __construct($crans, $loads) {
        $this->crans = $crans;
        $this->loads = $loads;
    }
    
    private function render($counter, $cransList, $loadWeigh, $loadDistance) {
        
        $cransList = substr($cransList,0,-2);
        
        if ( $counter == 0 ) {
                echo 'Для передвижения груза массой '.$loadWeigh.' на расстояние '.$loadDistance.' подходящего крана не найдено\;'.'<br>';
        } elseif ( $counter == 1 ) {
                echo 'Чтобы передвинуть груз массой '.$loadWeigh.' тонн на расстояние '.$loadDistance.' нужен кран марки '.$cransList.';'.'<br>';
        } elseif ( $counter > 1 ) {
                echo 'Чтобы передвинуть груз массой '.$loadWeigh.' тонн на расстояние '.$loadDistance.' подойдет любой из этих кранов: '.$cransList.';'.'<br>';
        }
        
    }
    
    public function getCransForLoads() {
        
        $loads = $this->loads;
        $crans = $this->crans;
        
        foreach ( $loads as $x => $x_value ) {
            
                $loadWeigh = $x_value->weigh;
                $loadDistance = $x_value->distance;
                $counter = 0;
                $cransList = '';
                
                foreach ( $crans as $x => $x_value ) {
                    
                    $cranCapacity = $x_value->capacity;
                    $cranJib = $x_value->jib;
                    $cranName = $x_value->name;
                    
                    if ( $cranCapacity >= $loadWeigh && $cranJib >= $loadDistance ) {
                        $counter++;
                        $cransList .= $cranName.', ';
                    }
                }
                $this->render($counter, $cransList, $loadWeigh, $loadDistance);
            }
    }
    
}

?>