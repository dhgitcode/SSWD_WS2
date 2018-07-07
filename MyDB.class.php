<?php
class MyDB{
    public $query;
    public $dbConnection;

    public function __construct($host, $username, $password, $dbname){

$this->$dbConnection = mysqli_connect($host,$username,$password,$dbname);
}

public function listScores(){
    $this->$query = "SELECT score FROM score_history" or die ("ERROR..." . mysqli_error($newConnection));

$result = $this->$dbConnection->query($this->$query);

while($row = mysqli_fetch_array($result)){
echo $row["score"] . "<br>";
}
}
}
?>