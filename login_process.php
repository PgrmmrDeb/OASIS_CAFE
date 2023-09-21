<?php
include "db_connection.php"; // Include the database connection script

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the login form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the user exists
    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User exists, check password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, user is authenticated
            // You can set up a session here to track user's login status
            echo "Login successful!";
            // Redirect to a welcome or dashboard page if needed
            // header("Location: welcome.php");
            // exit();
        } else {
            // Incorrect password
            echo "Login failed: Incorrect password.";
        }
    } else {
        // User does not exist
        echo "Login failed: User not found.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
