<?php

class Dice{

    private $faceValue;

    public function throwDice() {
        $this->faceValue = rand(1,6);
    }

    public function getFaceValue(){
        return $this->faceValue;
    }
}

// main 

$dice = new Dice();

$guess1 = $_GET['guess1'];
$guess2 = $_GET['guess2'];
$guess3 = $_GET['guess3'];

print "welcome <br/>";

$dice -> throwDice();

switch ($dice->getFaceValue()){
    case $guess1:
    echo "Guess 1 was rigth!";
    break;
    case $guess2:
    echo "Guess 2 was rigth!";
    break;
    case $guess3:
    echo "Guess 3 was rigth!";
    break;
    default:
    echo "Sorry, you didn't make any correct guesses! the correct vale was " . $dice->getFaceValue();

}

?>

