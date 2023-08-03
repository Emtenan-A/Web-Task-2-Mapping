<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2nd task";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get direction from request parameter
$direction = $_GET["direction"];

// Sanitize the input
$direction = mysqli_real_escape_string($conn, $direction);

// Insert command into the database
$sql = "INSERT INTO robotmovement (Direction) VALUES ('$direction')";

if (mysqli_query($conn, $sql)) {
    echo "Command stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
