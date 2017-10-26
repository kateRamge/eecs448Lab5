<?php
$servername = 'mysql.eecs.ku.edu';
$username = 'kramge';
$password = 'P@$$word123';
$database = 'kramge';
$mysqlUsers = new mysqli($servername, $username, $password, $database);
$userAuthorID = $_POST["userName"];
$userPost = $_POST["postContent"];

if($mysqlUsers->connect_error) {
  die("Connection failed " . $mysqlUsers->connect_error);
}
$sql = "SELECT * FROM Users WHERE user_id = '$userAuthorID'";
$result = mysqli_query($mysqlUsers, $sql);
$addingPost = "INSERT INTO Posts (content, author_id) VALUES ('$userPost', '$userAuthorID')";
$addPostRes = mysqli_query($mysqlUsers, $addingPost);
if(mysqli_num_rows($result) == 0) {
  //new user
  echo "You are not a registered user.<br>";
}
else {
  //existing user
  if($addPostRes) {
    echo "You have successfully made a post.<br>";
  }
  else {
    echo "Error!!!<br>";
  }
}

?>
