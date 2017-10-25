<?php
//help from stackoverflow
//https://stackoverflow.com/questions/17902483/show-values-from-a-mysql-database-table-inside-a-html-table-on-a-webpage
$servername = 'mysql.eecs.ku.edu';
$username = 'kramge';
$password = 'P@$$word123';
$database = 'kramge';
$mysqlUsers = new mysqli($servername, $username, $password, $database);

if($mysqlUsers->connect_error) {
  die("Connection failed " . $mysqlUsers->connect_error);
}

$sql = "SELECT * FROM Users";
$result = mysqli_query($mysqlUsers, $sql);
echo "<table border='3'>";
echo "<tr><td> Users </td></tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr><td>" . $row['user_id'] . "</td></tr>";
}
echo "</table>";
mysqli_close($mysqlUsers);
?>
