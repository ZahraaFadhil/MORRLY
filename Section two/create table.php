<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";
// Create connection
$conn = mysqli_connect($servername, $username,$password, $dbname);

$sql = "CREATE TABLE sign up (

id INT() UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Firstname  VARCHAR(30) NOT NULL,
Lastname   VARCHAR(30) NOT NULL,
Email      VARCHAR(50)
YPassword  VARCHAR(50) NOT NULL,
CPassword  VARCHAR(0)  NOT NULL,
Phnamber   int (100)   Not Null,;

if (mysqli_query($conn, $sql)) {
echo "Table MyGuests created successfully";
} 
else {
echo "Error creating table: " . 
mysqli_error($conn);
}

?>