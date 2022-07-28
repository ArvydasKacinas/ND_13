<?php

class FutboloRungtynes {
    public $patirtaTrauma;
    public $kuriKomandaLaimejo;
    public $rungtyniuRezultatas;
    
    public function simuliuotiTraumas() {
        $trauma=rand(1,1000);
        if($trauma%3==0 && $trauma%5==0 && $trauma%10==0){
            $patirtaTrauma=2;
        } else {
            $patirtaTrauma=0;
        }
    }

    public function simuliuotiRungtynes() {
        
    }

    public function laimetojai() {
        
    }
}



?>