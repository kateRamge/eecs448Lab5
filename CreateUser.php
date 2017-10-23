<?php
$mysqlUsers = new mysqli("mysql.eecs.ku.edu", "kramge", 'P@$$word123', "Users");
$userAuthorID = $_POST["userName"];

if($mysqlUsers->connect_error) {
  die("Connection failedL " . $mysqlUsers->connect_error);
}
if($mysqlUsers->query("SELECT user_id FROM Users WHERE user_id = " . $userAuthorID)->num_rows == 0) {
  //new user
  if($mysqlUsers->query("INSERT INTO Users (" . $userAuthorID . ")") === TRUE) {
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
