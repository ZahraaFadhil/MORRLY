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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  // Get the values from the form
  $id = mysqli_real_escape_string($conn, $_POST["id"]);
  $email = mysqli_real_escape_string($conn, $_POST["new_email"]);

  // Update the record in the database
  $sql = "UPDATE asign_up SET Email='$email' WHERE Id='$id'";

  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } 
  else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

// Close the connection
mysqli_close($conn);



?>
