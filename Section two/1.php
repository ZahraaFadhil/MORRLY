<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MORRLY";
// Create connection
$conn=mysqli_connect($servername, $username,$password, $dbname);

 // POST the form data
$Id=$_POST['Id'];
$Firstname=$_POST['Firstname'];
$Lastname   = $_POST['Lastname'];
$Email      = $_POST['Email'];
$YPassword  = $_POST['YPassword'];
$CPassword  = $_POST['CPassword'];
$Phnamber   = $_POST['Phnamber'];

//sql query
$sql = "INSERT INTO sign_up (Id ,Firstname ,Lastname ,Email ,YPassword,CPassword,Phnamber)
         VALUES ('$Id','$Firstname','$Lastname','$Email','$YPassword','$CPassword','$Phnamber');";

//check sql process
if (mysqli_query($conn, $sql)) {
  
  echo "process completed";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>