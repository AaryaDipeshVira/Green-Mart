<?php
session_start();
include "../db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Contact Us Style Sheet-->
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--End of Contact Us styel sheet-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="Icon" href="../image/webiste icon.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    
<!-- Navigation section starts  -->

<header class="header">

    <a href="../index.php" class="logo"> <i class="fas fa-shopping-basket"></i> &nbsp; Green Mart</a>

    <nav class="navbar">
        <a href="../index.php">Home</a>
        <a href="./Product.php">Products</a>
        <!-- <a href="./Favourite.html">Favourite Food List</a> -->
        <a href="./Contactus.php">Contact Us</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="searchpage.php" class="search-form" method="POST">
        <input type="search" name="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
            
        <a href="cart.php" class="btn">checkout</a>
    </div>
    <?php
        if(isset($_SESSION["userid"])){
            echo "<font size=3px>" . $_SESSION["userid"] . "</font>";
    ?>
    <form action="../logout.php" class="login-form">
        <h3>logout</h3>
        <input type="submit" value="logout" class="btn">
    </form>
    <?php
        }
    ?>
    <form action="../login.php" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="Your Email" class="box">
        <input type="password" placeholder="Your Password" class="box">
        <p>don't have an account <a href="./Account.html">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>

<!-- Navigation section Ends  -->
<!--Whatsapp Integration-->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-dc1c5087-a51b-4ce0-9b2f-4c520bbf6749"></div>
<!--End of Whatsapp Integration-->

 <!--Review Section-->
<section class="section">
<!-- CSS and JS file -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<!-- CSS and JS file end here -->
<body class="carousel-bg">
<!-- Quote Image -->
<div>
 <img src="https://i.imgur.com/gZ5HY0U.png" class="img-responsive quote-image">
</div>
<!-- Carousel Start below -->
<div id="carousel1" class="carousel slide testimonial-style" data-ride="carousel">
 <!-- Indicators -->
 <ol class="carousel-indicators">
   <li data-target="#carousel1" data-slide-to="0" class="active"></li>
   <li data-target="#carousel1" data-slide-to="1"></li>
   <li data-target="#carousel1" data-slide-to="2"></li>
 </ol>
 <!-- Wrapper for slides -->
 <div class="carousel-inner">
   <div class="item active">
     <div class="carousel-caption testimonial-caption-style">
       <p>The importance of food is obvious and essential. Healthy food provides us the nutrients and energy to develop and grow,Foods are directly related to our body and mental and social health because each food or liquid contains particular nutrition such as carbohydrates, protein, vitamins, minerals, fats, etc.</p>
       <p class="testimonial-authors">Mahek</p>
     </div>
   </div>
   <div class="item">
     <div class="carousel-caption testimonial-caption-style">
       <p>We all know very well foods are very important and we consume them in our daily life, foods affect our body and our mental and social health because each food or liquid contain particular nutrition which is very important for our physical and mental development. </p>
       <p class="testimonial-authors">Aarya</p>
     </div>
   </div>
   <div class="item">
     <div class="carousel-caption testimonial-caption-style">
       <p>Whenever we take any food or nutritious fluid, our bodies digest and absorb simple but essential minerals, vitamins, fats, proteins, carbohydrates, fats, and water from these meals or nourishing liquids and convert that into the bloodstream and energy that help our body to stimulate growth and keep it healthy. </p>
       <p class="testimonial-authors">Bhoomi</p>
     </div>
   </div>
 </div>

 <!-- Controls -->

 <a class="left carousel-control" href="#carousel1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
 <a class="right carousel-control" href="#carousel1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
</div>
 </section>    
 <!--End of review section-->
<section class="contact">

  <div class="icons-container">

      <div class="icons">
          <i class="fas fa-phone-alt"></i>
          <h3>Contact Number</h3>
          <p>+91 7021675525</p>
      </div>

      <div class="icons">
          <i class="fas fa-envelope"></i>
          <h3>Email Address</h3>
          <p>greenmart24x7@gmail.com</p>
      </div>

      <div class="icons">
          <i class="fas fa-map-marker-alt"></i>
          <h3>Address</h3>
          <p>A/402 Green Mart Stores, Oppo Kidney Hospital, Iraniwadi,Kandivali(W), Mumbai-400067</p>
      </div>

  </div>

  <div class="row">
  	<?php 
  		if(isset($_POST["btnSend"])){
  			$name = $_POST["name"];
  			$email = $_POST["email"];
  			$phnumber = $_POST["phnumber"];
  			$subject = $_POST["subject"];
  			$message = $_POST["message"];

  			$qry = "INSERT into contactus(name,emailid,phonenumber,subject,message) values('".$name."','".$email."','".$phnumber."','".$subject."','".$message."')";
  			// echo $qry;
  			if(mysqli_query($con,$qry)){
  				echo "<script>alert('Message sent successfully!');</script>";
  			}
  			else{
  				echo "<script>alert('Something went wrong!');</script>";
  			}

  		}
  	?>
      <form action="Contactus.php" method="POST">
          <h3>get in touch</h3>
          <div class="inputBox">
              <input type="text" name="name" placeholder="enter your name" class="box">
              <input type="email" name="email" placeholder="enter your email" class="box">
          </div>
          <div class="inputBox">
              <input type="number" name="phnumber" placeholder="enter your number" class="box">
              <input type="text" name="subject" placeholder="enter your subject" class="box">
          </div>
          <textarea placeholder="your message" name="message" cols="30" rows="10"></textarea>
          <input type="submit" name="btnSend" value="send message" class="btn">
      </form>

      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.8793045011953!2d72.84174261469961!3d19.20047328701655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7fdc8b9437f%3A0x35a38bfff163cee!2sSupreme%20legacy%20Hari%20Niwas%20Chsl!5e0!3m2!1sen!2sin!4v1644140490388!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

  </div>

</section>
 <!--Contact Us Form-->
 <!--End of Contact us form-->
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3><i class="fas fa-shopping-basket"></i> &nbsp; Green Mart</a>
            </h3>
            <div>
                <a href="#" class="links"> <i class="fas fa-at"></i>Organic Grocery Sellers</a>
                <a href="#" class="links"> <i class="fas fa-at"></i>Support local business</a>
                <a href="#" class="links"> <i class="fas fa-at"></i>Reduce paper work and save time</a>
            </div>
            
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="mailto:greenmart24x7@gmail.com" class="links"> <i class="fas fa-envelope"></i>greenmart24x7@gmail.com</a>
            <a href="callto:+91 7021675525" class="links"> <i class="fas fa-phone-alt"></i>+91 7021675525</a>
            <a href="https://goo.gl/maps/fztRgH177NvaULyV7" class="links"> <i class="fas fa-map-marker-alt"></i>A/402 Green Mart Stores, Oppo Kidney Hospital, Iraniwadi, <br/>Kandivali(W), Mumbai-400067</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="../index.php" class="links"> <i class="fas fa-arrow-right"></i>Home</a>
            <a href="Product.php" class="links"> <i class="fas fa-arrow-right"></i>Product</a>
            <a href="Contactus.php" class="links"> <i class="fas fa-arrow-right"></i>Contact Us</a>
        </div>

        <div class="box">
            <h3>User Feedback</h3>
            <p>Your feedback is valuable to us</p>
            <input type="text" placeholder="Write your feedback" class="email">
            <input type="submit" value="submit" class="btn">
        </div>

    </div>

    <div class="credit"> © 2021 - <span> Green Mart</span> | all rights reserved </div>

</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>