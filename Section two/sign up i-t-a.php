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
$stmt = $conn->prepare("INSERT INTO asign_up (Firstname, Lastname, Email, YPassword, CPassword, Phnamber) 
                                      VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $firstname, $lastname, $email, $ypassword, $cpassword, $phonenumber);

// Set the parameters and execute the statement
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$ypassword = $_POST["ypassword"];
$cpassword = $_POST["cpassword"];
$phonenumber = $_POST["phonenumber"];

if ($stmt->execute()) {
  echo "Record inserted successfully!";
} else {
  echo "Error inserting record: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
