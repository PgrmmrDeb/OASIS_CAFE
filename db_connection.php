<?php
$db_host = "localhost";
$db_name = "login_system";

// Create a database connection without a username and password
$conn = new mysqli($db_host, '', '', $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Test the connection by running a simple query
$result = $conn->query("SELECT 'Connected successfully' AS message");
$row = $result->fetch_assoc();
echo $row['message'];
?>
