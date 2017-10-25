<?php
//https://stackoverflow.com/questions/11292468/how-to-check-if-value-exists-in-a-mysql-database
$servername = 'mysql.eecs.ku.edu';
$username = 'kramge';
$password = 'P@$$word123';
$database = 'kramge';
$mysqlUsers = new mysqli($servername, $username, $password, $database);
$userAuthorID = $_POST["userName"];

if($mysqlUsers->connect_error) {
  die("Connection failed " . $mysqlUsers->connect_error);
}

$sql = "SELECT user_id FROM Users WHERE user_id = " . $userAuthorID;
$result = mysqli_query($mysqlUsers, $sql);
$sqlins = "INSERT INTO Users (user_id) VALUES (" . $userAuthorID . ")"; 
$resultins = mysqli_query($mysqlUsers, $sqlins);

if($result->num_rows == 0) {
  //new user
  if($resultins) {
    echo "You have successfully created a new user.<br>";
  }
  else {
    echo "Error!!!<br>";
  }
}
else {
  echo "You entered an existing username.<br>";
}

?>
