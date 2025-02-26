<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <?php
   session_start();
   // print_r($_SESSION["user_id"]);
   $emailFromDB =  $_SESSION["user_id"];
   // echo $emailFromDB;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laundry_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `signup_form` WHERE email='$emailFromDB'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
   while($row = $result->fetch_assoc()) {
      // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      $nameFromDB =  $row["name"];
      $phoneFromDB = $row["phone"];
      $addressFromDB = $row["address"];
      // echo "yessssss";
   }
} else {
   echo "0 results";
}

   ?>

<section class="header">

   <a href="home.php" class="logo">BIG boss</a>

   <nav class="navbar">
      <a href="home.php">Dashboard</a>
      <a href="profile.php">Profile</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
      <a href="about.php">About</a>
      <a href="logout.php">Log Out</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Profile</h1>
</div>


<section class="booking">

   <h1 class="heading-title">Update Your Profile</h1>

   <form action="profile_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input  id = "name" type="text" placeholder="enter your name"  name="name" require>
         </div>
         <!-- <div class="inputBox">
            <span>Email :</span>
            <input id = "email" type="email" placeholder="enter your email" name="email" require>
         </div> -->
         <div class="inputBox">
            <span>Phone No :</span>
            <input id= "phone" type="number" min="0000000000" max="9999999999" placeholder="enter your number" name="phone" require>
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input id="address" type="text" placeholder="enter your address" name="address" require>
         </div>
            <?php

            ?>
         </div>
         <style>
               .drp_btn{
                  min-width:100%;
                  padding: 1.2rem 1.4rem;
                  font-size: 1.6rem;
                  color: var(--light-black);
                  text-transform: none;
                  margin-top: 1.5rem;
                  border:1px solid black;
               }
               .pass-link{
                text-align:center;
                font-size:20px;
                text-decoration:underline;
               }
            </style>
             
         
        
      </div>
      <center>
      <input type="submit" value="Update" class="btn" name="send">
</center>

   </form>
    <a href = "password.php" class="pass-link">To Update PassWord Click Here</a>
</section>


<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
         <a href="logout.php"><i class="fas fa-angle-right"></i>Log Out</a>
      </div>

      <div class="box">
         <h3>HelpDesk</h3>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="https://en.wikipedia.org/wiki/Privacy_policy"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>

      <div class="box">
         <h3>Contact Us</h3>
         <a > <i class="fas fa-phone"></i> 0554572070 </a>
         <a> <i class="fas fa-envelope"></i> BIG_boss@gmail.com </a>
         <a> <i class="fas fa-map"></i> Riyadh,saudi</a>
      </div>

      <div class="box">
         <h3>Social Media Handles</h3>
         <a href="www.facebook.com"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="www.twitter.com"> <i class="fab fa-twitter"></i> Twitter </a>
         <a href="www.instagram.com"> <i class="fab fa-instagram"></i> Instagram </a>
         <a href="www.linkedin.com"> <i class="fab fa-linkedin"></i> Linkedin </a>
      </div>

   </div>

   <div class="credit">All rights reserved!</div>

</section>

<!-- footer section ends -->
<script>
         document.getElementById("name").value = "<?php echo $nameFromDB ?>";
         document.getElementById("phone").value = "<?php echo $phoneFromDB ?>";
         document.getElementById("address").value = "<?php echo $addressFromDB ?>";
</script>








<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>