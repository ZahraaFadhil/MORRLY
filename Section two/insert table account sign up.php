<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "morrly";

$conn=mysqli_connect($servername,$username,$password, $dbname);

$Id=$_POST['Id'];
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$Email=$_POST['Email'];
$YPassword=$_POST['YPassword'];
$CPassword=$_POST['CPassword'];
$Phnamber=$_POST['Phnamber'];

$sql="INSERT INTO sign_up(Id,Firstname,Lastname,Email,YPassword,CPassword,Phnamber)
         VALUES 
         ('$Id','$Firstname','$Lastname','$Email','$YPassword','$CPassword','$Phnamber');";


if (mysqli_query($conn, $sql)) {
  
  echo "process completed";

} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>