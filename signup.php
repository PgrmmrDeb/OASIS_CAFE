<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup - Oasis Cafe</title>
  <link rel="stylesheet" href="style.css">

  <!-- Add the JavaScript for name validation -->
  <script>
    function validateNameInput() {
      var firstName = document.getElementsByName('firstname')[0].value;
      var lastName = document.getElementsByName('lastname')[0].value;
      var namePattern = /^[A-Za-z\s]+$/;

      if (!firstName.match(namePattern) || !lastName.match(namePattern)) {
        alert('Error: First and last names should contain only letters and spaces.');
        return false;
      }

      return true;
    }
  </script>
</head>
<body>
  <?php include "header.php"; ?>

  <section class="signup">
    <section class="col">
      <div class="signup-container">
        <div class="title">
          <img src="imgs/logo-typo.png" alt="">
          <h2>SIGN UP</h2>
        </div>

        <form action="signup_process.php" method="get" onsubmit="return validateNameInput();">
    <div class="form-field">
        <input type="text" name="firstname" pattern="[A-Za-z\s]+" required>
        <label for="firstname">First Name</label>
    </div>
    <div class="form-field">
        <input type="text" name="lastname" pattern="[A-Za-z\s]+" required>
        <label for="lastname">Last Name</label>
    </div>
    <div class="form-field">
        <input type="text" name="address" required>
        <label for="address">Address</label>
    </div>
    <div class="form-field">
        <input type="text" name="username" required>
        <label for="username">Username</label>
    </div>
    <div class="form-field">
        <input type="password" name="password" required>
        <label for="password">Password</label>
    </div>
    <div class="signup-button">
        <input type="submit" class="signup-btn" value="Signup">
    </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['firstname']) && isset($_GET['lastname'])) {
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];

    // Generate the dropdown with the user's input
    echo '<select>';
    echo "<option value=\"$firstname\">$firstname</option>";
    echo "<option value=\"$lastname\">$lastname</option>";
    echo '</select>';
}
?>
  
      </div>
    </section>
  </section>
</body>
</html>
