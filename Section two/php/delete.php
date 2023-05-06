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

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $val_in = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "DELETE FROM asign_up WHERE Id='$val_in'";
  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
} else {
  echo "ID parameter is not set in the URL or is empty.";
}

mysqli_close($conn);
?>
