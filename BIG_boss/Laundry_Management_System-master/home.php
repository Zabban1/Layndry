

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
      // $nameFromDB =  $row["name"];
      $emailFromDB = $row["email"];
      $statusFromDB = $row["status"];
      $dateFromDB = $row["date"];
      // $phoneFromDB = $row["phone"];
      // $addressFromDB = $row["address"];
      // echo "yessssss";
   }
} else {
   echo "0 results";
}

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">
   <style>
      .home{
         position: relative;
      }
      .status-container{
         position: absolute;
         width: 250px;
         min-height: 100px;
         background:darkgray;
         right: 2%;
         top: 2%;
         z-index: 111111111;
      }
   </style>

</head>
<body>
   

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



<section class="home">
   <div class="status-container">
      <p><h2><center>Order Status</center></h2></p>
      <center>
      <div><h3><I>Email: <?=$emailFromDB?><I></I></h3></div>
      <div><h3>Status: <?=$statusFromDB?><br> On <br> <?=$dateFromDB?></h3></div>
      </center>
   </div>

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home_second.jpg) no-repeat">
            <div class="content">
               <span>Clean, Bright, Spotless</span>
               <h3>We Caring Clothes Better.</h3>
               <a href="package.php" class="btn">Explore More</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home_first.jpg) no-repeat">
            <div class="content">
               <span>Clean, Bright, Spotless</span>
               <h3>Fresh Clothes, Fresh Life.</h3>
               <a href="package.php" class="btn">Explore More</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home_third.jpg) no-repeat">
            <div class="content">
               <span>Clean, Bright, Spotless</span>
               <h3>A Life Full of Whiteness.</h3>
               <a href="package.php" class="btn">Explore More</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>



<section class="services">

   <h1 class="heading-title"> Services We Offer </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cleaning-icon.png" alt="">
         <h3>Cleaning</h3>
      </div>

      <div class="box">
         <img src="images/dry-cleaning-icon.png" alt="">
         <h3>Dry Cleaning</h3>
      </div>

      <div class="box">
         <img src="images/stain_removal.png" alt="">
         <h3>Stain Removal</h3>
      </div>

      <div class="box">
         <img src="images/ironing-icon.png" alt="">
         <h3>Ironing</h3>
      </div>

      <div class="box">
         <img src="images/icons8-fabric-sample-92.png" alt="">
         <h3>Fabric Care</h3>
      </div>

      <div class="box">
         <img src="images/icons8-bleach-92.png" alt="">
         <h3>Bleaching</h3>
      </div>

   </div>

</section>



<section class="home-about">

   <div class="image">
      <img src="images/big boss M.png" alt="">
   </div>

   <div class="content">
      <h3>About us</h3>
      <p>BIG Boss. Is An Saudi Arabia Online Laundry Providing Company That Operates A Website. We Also Offer Cleaning.</p>
      <a href="about.php" class="btn">Read More</a>
   </div>

</section>



<section class="home-packages">

   <h1 class="heading-title"> Our Pricing </h1>

   <div class="box-container">

   <div class="box">
         <div class="image">
            <img src="images/machine_wash.jpg" alt="">
         </div>
         <div class="content">
            <h3>Machine Cleaning</h3>
            <p><b><h4>Top Wear Cleaning Price:</h4></b>&nbsp;&nbsp;&nbsp;12rs(per piece)<br><br>
               <b><h4>Bottom Wear Cleaning Price:</h4></b>&nbsp;&nbsp;&nbsp;20rs(per piece)<br><br>
               <b><h4>Woolen Cloth Cleaning Price:</h4></b>&nbsp;&nbsp;&nbsp;75rs(per piece)<br><br>
               <b><h4>Other Price:</h4></b>Other Price depend upon Cloth Variety(other than above three category).
         </p>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/dry_clean.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dry Cleaning</h3>
            <p><b><h4>Top Wear Dry Cleaning Price:</h4></b>&nbsp;&nbsp;&nbsp;120rs(per piece)<br><br>
               <b><h4>Bottom Wear Dry Cleaning Price:</h4></b>&nbsp;&nbsp;&nbsp;200rs(per piece)<br><br>
               <b><h4>Woolen Cloth Dry Cleaning Price:</h4></b>&nbsp;&nbsp;&nbsp;300rs(per piece)<br><br>
               <b><h4>Other Price:</h4></b>Other Price depend upon Cloth Variety(other than above three category).
         </p>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/stain_remove.webp" alt="">
         </div>
         <div class="content">
            <h3>Stain Removal</h3>
            <p><b><h4>Top Wear Stain Removal Price:</h4></b>&nbsp;&nbsp;&nbsp;80rs(per piece)<br><br>
               <b><h4>Bottom Wear Stain Removal Price:</h4></b>&nbsp;&nbsp;&nbsp;135rs(per piece)<br><br>
               <b><h4>Woolen Cloth Stain Removal Price:</h4></b>&nbsp;&nbsp;&nbsp;200rs(per piece)<br><br>
               <b><h4>Other Price:</h4></b>Other Price depend upon Cloth Variety(other than above three category).
         </p>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Load More</a> </div>

</section>


<section class="home-offer">
   <div class="content">
      <h3>Affordable Price</h3>
      <p>We Provide Various Laundy Services in Affordable Price & We Also Offer Great Discounts.</p>
      <a href="book.php" class="btn">Book Session Now</a>
   </div>
</section>



















<section class="footer">

   <div class="box-container">

   <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
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
         <a> <i class="fas fa-map"></i> Riyadh,Saudi</a>
      </div>

      <div class="box">
         <h3>Social Media Handles</h3>
         <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="https://twitter.com/i/flow/login"> <i class="fab fa-twitter"></i> Twitter </a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> Instagram </a>
         <a href="https://www.linkedin.com/"> <i class="fab fa-linkedin"></i> Linkedin </a>
      </div>
   </div>

   <div class="credit">Blitz Cleaners,Inc. All Rights Reserved! </div>

</section>







<?php
   if(isset($_GET['url']) and $_GET['url']=='1'){
      echo '<script>alert("Login Successful");location.href="home.php";</script>';
   }
?>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>