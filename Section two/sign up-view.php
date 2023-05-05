<?php
include('select table.php');

// Perform database query to select all rows from the table
$sql = "SELECT * FROM asign_up";
$result = mysqli_query($conn, $sql);

// Check if any rows are returned
if(mysqli_num_rows($result) > 0) {
    // Output table header
    echo "<table border='1'>";
    echo"  <br>";     echo"  <br>";
    echo "<form method='post' action='update.php'>";
        echo " <label for='id'>ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";
        echo " <input type='text' name='id' id='id'>";
        echo "  <br>";
        echo "  <label for='new_email'>New email:&nbsp;&nbsp;</label>";
        echo "  <input type='text' name='new_email' id='new_email'>";
        echo "  <br>";
        echo " <input type='submit' value='Update email'>";
        echo "  <br>"; echo "  <br>";
        echo " </form>";

    echo "<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>YPassword</th>
    <th>CPassword</th>
    <th>Phone Number</th>

     <th>Delete</th>
    </tr>";
    
    // Output table rows with data
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['Id']."</td>";
        echo "<td>".$row['Firstname']."</td>";
        echo "<td>".$row['Lastname']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['YPassword']."</td>";
        echo "<td>".$row['CPassword']."</td>";
        echo "<td>".$row['Phnamber']."</td>";
        echo "<td>";

        echo "<a href='delete.php?id=".$row['Id']."'>Delete</a>";
        echo"</td>";
        
        echo "</tr>";
    }
    
    // Output table footer
    echo "</table>";
} else {
    echo "No records found.";
}
?>
