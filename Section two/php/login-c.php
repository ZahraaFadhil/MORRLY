<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "morrly";
// Create connection
$conn = mysqli_connect($servername, $username,$password, $dbname);

$sql = "CREATE TABLE login (

id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Email      VARCHAR(50),
YPassword  VARCHAR(50) NOT NULL)";

if (mysqli_query($conn, $sql)) {
echo "Table MyGuests created successfully";
} 
else {
echo "Error creating table: " . 
mysqli_error($conn);
}

?>