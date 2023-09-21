<?php
include "db_connection.php"; // Include the database connection script

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];

    // You can add more validation here for security

    // Insert user data into the database
    $sql = "INSERT INTO users (firstname, lastname, address, username, password, email, contact_number) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("sssssss", $firstname, $lastname, $address, $username, $password, $email, $contact_number);

    // Execute the query
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Registration failed.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
