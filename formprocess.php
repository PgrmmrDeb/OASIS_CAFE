<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $username = $_GET["username"];

  $_SESSION["username"] = $username;
  header("Location: index.php");
  exit;
} 

?>