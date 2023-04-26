<?php
$servername = "localhost";  //my computer
$username = "root";
$password = "";
$db=  "morrly";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
 
// Check connection
if ($conn->connect_error) {
   die("Connection failed server one: " . $conn->connect_error); 
}
else {
echo "Connected successfully server Two <br>"; }
  
$servername2 = "192.168.0.108";  // redhua server
$username2= "zahraa";
$password2 = "1234";
 $db=  "morrly";
 $port="3307";
// Create connection
$conn2 = new mysqli($servername2, $username2, $password2,$db,$port);

// Check connection

if ($conn2->connect_error) {
  die("Connection failed for server two: " . $conn2->connect_error);

}
echo "Connected successfully server One<br>"; 


// Set the parameters and execute the statement
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$ypassword = $_POST["ypassword"];
$cpassword = $_POST["cpassword"];
$phonenumber = $_POST["phonenumber"];
 
$stmt = $conn->prepare("INSERT INTO morrly.asign_up (Firstname, Lastname, Email, YPassword, CPassword, Phnamber) 
                                     VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi",$firstname,$lastname,$email,$ypassword,$cpassword,$phonenumber);


$stmt->execute();

 
$stmt2 = $conn2->prepare("INSERT INTO morrly.asign_up (Firstname, Lastname, Email, YPassword, CPassword, Phnamber) 
VALUES (?, ?, ?, ?, ?, ?)");

$stmt2->bind_param("sssssi", $firstname, $lastname, $email, $ypassword, $cpassword, $phonenumber);

$stmt2->execute();
 
echo "add complete.."

?>