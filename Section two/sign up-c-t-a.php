<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "morrly";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// SQL to create table
$sql = "CREATE TABLE asign_up (
Id         INT(10)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Firstname  VARCHAR(50) NOT NULL,
Lastname   VARCHAR(50) NOT NULL,
Email      VARCHAR(50),
YPassword  VARCHAR(50) NOT NULL,
CPassword  VARCHAR(50)  NOT NULL,
Phnamber   INT(100)   NOT NULL)";

if (mysqli_query($conn, $sql)) {
  echo "Table created successfully!";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
