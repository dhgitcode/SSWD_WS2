<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'testDB';

$newConnection = mysqli_connect($host,$username,$password,$dbname);

$query = "SELECT * FROM stuff" or die ("ERROR..." . mysqli_error($newConnection));

$result = $newConnection->query($query);

while($row = mysqli_fetch_array($result)){
echo $row["name"] . "<br>";
}
?>