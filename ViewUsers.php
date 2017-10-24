<?php
//help from stackoverflow
//stackoverflow.com/questions/8437685/display-sql-table-in-php
$mysqlUsers = new mysqli("mysql.eecs.ku.edu", "kramge", 'P@$$word123', "Users");

if($mysqlUsers->connect_error) {
  die("Connection failedL " . $mysqlUsers->connect_error);
}
if($mysqlUsers->query("SELECT user_id FROM Users WHERE user_id = " . $userAuthorID)->num_rows == 0) {
  //new user
}

//existing user
//TODO: create table outline
//TODO: create loop thingy
echo "<table>";
while($row = mysql_fetch_array(mysql_query("SELECT user_id FROM Users"))) {
  echo "<tr><td>" .$row['user_id'] . "</td></tr>";
}
echo "</table>";

?>
