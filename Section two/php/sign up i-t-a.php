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

// Check if the YPassword and CPassword fields match
$YPassword = isset($_POST['YPassword']) ? $_POST['YPassword'] : "";
$CPassword = isset($_POST['CPassword']) ? $_POST['CPassword'] : "";

if ($YPassword != $CPassword) {
  echo "Error: Passwords do not match. Please try again.";
  exit; // stop the script if the passwords don't match
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO asign_up (Firstname, Lastname, Email, YPassword, CPassword, Phnamber) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $Firstname, $Lastname, $Email, $YPassword, $CPassword, $Phnumber);

// Set the parameters and execute the statement
$Firstname = isset($_POST["Firstname"]) ? $_POST["Firstname"] : "";
$Lastname = isset($_POST["Lastname"]) ? $_POST["Lastname"] : "";
$Email = isset($_POST["Email"]) ? $_POST["Email"] : "";
$Phnumber = isset($_POST["Phnumber"]) ? $_POST["Phnumber"] : "";

if ($stmt->execute()) {
  echo "Record inserted successfully!";
} else {
  echo "Error inserting record: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
