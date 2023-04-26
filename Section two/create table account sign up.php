<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "morrly";
// Create connection
$conn = mysqli_connect($servername, $username,$password, $dbname);

$sql = "CREATE TABLE Sign_up (
Id         INT(100)  AUTO_INCREMENT PRIMARY,
Firstname  VARCHAR(50) NOT NULL,
Lastname   VARCHAR(50) NOT NULL,
Email      VARCHAR(50),
YPassword  VARCHAR(50) NOT NULL,
CPassword  VARCHAR(50)  NOT NULL,
Phnamber   INT(100)   NOT NULL )";


if (mysqli_query($conn, $sql)) {
echo "Table MyGuests created successfully";
} 
else {
echo "Error creating table: " . 
mysqli_error($conn);
}

?>