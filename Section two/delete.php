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
  $sql = "DELETE FROM asign_up WHERE Id='$val
_in'";
if ($conn->query($sql) === true) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . $conn->error;
}
} else {
echo "ID parameter is not set in the URL.";
}

$conn->close();
?>