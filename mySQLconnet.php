<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "reservation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO reservation (id,firstName, lastName)
VALUES ('4', 'angle', 'my angel')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>