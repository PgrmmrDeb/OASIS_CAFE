<?php
session_start();

if (isset($_GET["logout"])) {

    session_unset();

    session_destroy();

    header("Location: menu-cafe.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="menu-child.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Rubik:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Autour+One&family=Montserrat:wght@400;700&family=Rubik:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
  <title>Menu - Oasis Cafe</title>
  <link rel="icon" type="image/x-icon" href="imgs/favicon.png">

</head>
<body>
  <!--header start-->
  <?php include "header.php"; ?>
<!--header end-->
<img src="imgs/WebsiteBanner.svg" class="menu-banner" alt="">
<!--Menu start-->
<div class="menu-div">
  <div class="left-menu">
    <ul>
      <span class="menu-title">Drinks</span>
      <li> <a href="signature-drink.html"> Signature Drink </a> </li>
      <li> <a href="espresso.html"> Espresso </a> </li>
      <li> <a href="frappe.html"> Frappe </a> </li>
      <li> <a href="fruit-shake.html"> Fruit Shake </a> </li>
      <li> <a href="smoothie.html"> Smoothie </a> </li>
      <li> <a href="tea.html"> Tea </a> </li>
      
    </ul>
    <ul><br>
      <span class="menu-title">Foods</span>
      <li> <a href="pastry.html"> Pastry </a> </li>
      <li> <a href="pasta.html"> Pasta </a> </li>
    </ul>
  </div>
  <div class="right-menu">
    <div class="section-header">
      <h4>Drinks</h4>
    </div>
    <div class="menu-chooser">
      <div class="menu-container">
        <div class="img-wrapper">
          <a href="signature-drink.html"> 
          <img class="menu-image" src="menu-images/Frappe bg/5.png" alt="">
          <p>Signature Drink</p>
        </a>
        </div>  
      </div>
  
      <div class="menu-container">
        <div class="img-wrapper">
          <a href="espresso.html"> 
          <img class="menu-image" src="menu-images/espresso bg/5.png" alt="">
        </a>
        <p>Espresso</p>

        </div>  
      </div>
      <div class="menu-container">
        <div class="img-wrapper">
          <a href="frappe.html"> 
          <img class="menu-image" src="menu-images/Frappe bg/4.png" alt="">
          <p>Frappe</p>
        </a>
        </div>  
      </div>
      <div class="menu-container">
        <div class="img-wrapper">
          <a href="fruit-shake.html"> 
          <img class="menu-image" src="menu-images/fruit shake bg/1.png" alt="">
          <p>Fruit Shake</p>
        </a>
        </div>  
      </div>
      <div class="menu-container">
        <div class="img-wrapper">
          <a href="smoothie.html"> 
          <img class="menu-image" src="menu-images/Smoothies bg/2.png" alt="">
          <p>Smoothie</p>
        </a>
        </div>  
      </div>
      <div class="menu-container">
        <div class="img-wrapper">
          <a href="tea.html"> 
          <img class="menu-image" src="menu-images/tea bg/4.png" alt="">
          <p>Tea</p>
        </a>
        </div>  
      </div>
    </div>
    <div class="section-header"><br><br>
      <h4>Food</h4>
    </div>
    <div class="menu-chooser">
      <div class="menu-container">
        <div class="img-wrapper">
          <a href="pastry.html"> 
          <img class="menu-image" src="menu-images/PASTRY BG/5.png" alt="">
          <p>Pastry</p>
        </a>
        </div>  
      </div>
  
      <div class="menu-container">
        <div class="img-wrapper">
          <a href="pasta.html"> 
          <img class="menu-image" src="menu-images/Pasta bg/2.png" alt="">
        </a>
        <p>Pasta</p>

        </div>  
      </div>
    </div>
    </div>
    
</div>
<!--Menu end-->
<div class="footer">
  <div class="first-column">
    <h4>FOR MORE INQUIRIES</h4>
    <div class="first-column-child">
      <img src="icons/map-pin-svgrepo-com.svg" alt="" >
      <p>
      Near Pyur Luxury, Ascott, 5th Avenue Corner <br> 28th Street, Bonifactio Global City, Metro Manila </p>
    </div>
    <div class="first-column-child">
      <img src="icons/phone-svgrepo-com.svg" alt="">
      <p>
      +639532913412</p>
    </div>
    <div class="first-column-child">
      <img src="icons/email-svgrepo-com.svg" alt="">
      <p>
      oasiscafe@gmail.com</p>
    </div>

  </div>
  <div class="second-column">
    <h4>FOLLOW US</h4>
    <p>Find us on our <br>social media accounts!</p>
    <div class="second-column-child">
      <a href="https://www.facebook.com/profile.php?id=100092202248783&mibextid=ZbWKwL"><img src="icons/facebook-176-svgrepo-com.svg" alt=""></a>
      <a href="https://instagram.com/oasiscafe647?igshid=ZGUzMzM3NWJiOQ=="><img src="icons/instagram-svgrepo-com (1).svg" alt=""></a>
      <a href=""><img src="icons/twitter-154-svgrepo-com.svg" alt=""></a> 

    </div>

  </div>

  <div class="third-column">
    <h4>OPEN HOURS</h4>
    <p style="font-weight: bold;">Monday to Friday</p>
    <p>6:00 AM TO 11:00 PM</p>
    <p style="font-weight: bold;">Saturday to Sunday</p>
    <p>8:00 AM TO 1:00 AM</p>
  </div>
</div>
</body>
</html>