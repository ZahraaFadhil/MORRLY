<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "morrly";
// Create connection
$conn = mysqli_connect($servername, $username,$password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
  $val_in = $_GET['id'];
  $sql = "DELETE FROM asign_up WHERE id='$val_in'";
  if ($conn->query($sql) === true) {
    echo "Delete is done.";
  } else {
    echo "Delete failed: " . $conn->error;
  }
} else {
  echo "ID parameter is not set in the URL.";
}

$conn->close();
?>
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
  $Id = $_POST["Id"];
  $Firstname = $_POST["Firstname"];
  $Lastname = $_POST["Lastname"];

  // Update the record in the database
  $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

  if ($conn->query($sql) === true) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

// Close the connection
$conn->close();
?>