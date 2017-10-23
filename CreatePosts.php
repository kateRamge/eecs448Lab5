<?php
$mysqlPosts = new mysqli("mysql.eecs.ku.edu", "kramge", 'P@$$word123', "Posts");
$mysqlUsers = new mysqli("mysql.eecs.ku.edu", "kramge", 'P@$$word123', "Users");
$userAuthorID = $_POST["userName"];
$userPost = $_POST["postContent"];

if($mysqlPosts->connect_error) {
  die("Connection failedL " . $mysqlPosts->connect_error);
}
if($mysqlUsers->connect_error) {
  die("Connection failedL " . $mysqlUsers->connect_error);
}

if($mysqlUsers->query("SELECT user_id FROM Users WHERE user_id = " . $userAuthorID)->num_rows == 0) {
  //new user
}
else {
  //existing user
  if($mysqlPosts->query("INSERT INTO Posts (" . $usersPost . "," . $userAuthorID . ")") === TRUE) {
    echo "You have successfully made a post.<br>";
  }
  else {
    echo "Error!!!<br>";
  }
}

?>
