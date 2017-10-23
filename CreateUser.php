<?php
$mysqlUsers = new mysqli("mysql.eecs.ku.edu", "kramge", 'P@$$word123', "Users");
$userAuthorID = $_POST["userName"];

if($mysqlUsers->connect_error) {
  die("Connection failedL " . $mysqlUsers->connect_error);
}
if($mysqlUsers->query("SELECT user_id FROM Users WHERE user_id = " $userAuthorID)->num_rows == 0) {
  //this is a new user
}
else {
  echo "You are an existing user<br>";
}

?>
