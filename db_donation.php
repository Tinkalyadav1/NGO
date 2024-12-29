<?php
// Database connection settings
$servername = "localhost";  // Hostname, typically localhost
$username = "root";         // Your MySQL username (default is root)
$password = "root";             // Your MySQL password (leave empty for default if no password)
$dbname = "ngo_database";   // The name of the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

?>


