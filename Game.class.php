<?php

class Game{
    public $guesses = $array();
    public $currentGuess;
    public $numberWereTryingToGuess;

    public function saveGuess($number){
        //stub
    }
    public function listGuesses(){
        //stub
    }
public function guessHandler(){
    $guess = newNumberGenerator();
    $currentGuess = $guess->makeAGuess();
    $this_>saveGuess($currentGuess);
    return$currentGuess;
    
}
}