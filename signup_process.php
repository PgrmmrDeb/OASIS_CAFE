<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $firstname = $_GET["firstname"];
  $lastname = $_GET["lastname"];
  $addreess = $_GET["address"];
  $username = $_GET["username"];

  $_SESSION["firstname"] = $firstname;
  $_SESSION["lastname"] = $lastname;
  $_SESSION["address"] = $address;
  $_SESSION["username"] = $username;

  header("location: index.php");
  exit;
  header("location: menu-cafe.php");
  exit;


}