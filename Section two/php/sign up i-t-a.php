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

// Prepare and bind the SQL statement
$stmt=$conn->prepare("INSERT INTO asign_up (Firstname, Lastname, Email, YPassword, CPassword, Phnamber) 
                                      VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $Firstname, $Lastname, $Email, $YPassword, $CPassword, $Phnumber);

// Set the parameters and execute the statement
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];
$Email = $_POST["Email"];
$YPassword = $_POST["YPassword"];
$CPassword = $_POST["CPassword"];
$Phnumber = $_POST["Phnumber"];

if ($stmt->execute()) {
  echo "Record inserted successfully!";
} else {
  echo "Error inserting record: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
