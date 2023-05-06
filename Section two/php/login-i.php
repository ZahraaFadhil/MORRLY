<?php
if (!isset($_SESSION['Email']) || empty($_SESSION['Email'])) {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header('Location: sign up i-t-a.php');
    exit;
}

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

// Prepare and bind the statement
$stmt = $conn->prepare("INSERT INTO login(Email, YPassword) VALUES (?, ?)");
$stmt->bind_param("ss",$email, $password);

// Set the parameters and execute the statement
$email = $_POST['Email'];
$password = $_POST['YPassword'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the statement and connection
$stmt->close();
mysqli_close($conn);

?>