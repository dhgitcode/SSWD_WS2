<?php

class NumberGenerator{
    public $guess;
    
    public function makeAGuess(){
        return rand(1,6);
    }
}
?>