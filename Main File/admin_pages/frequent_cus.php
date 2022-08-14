<?php
include "../db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" href="../image/webiste icon.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

    <!--header file for  admin dashboard-->
    <meta charset="UTF-8">
    <title>Product Analysis</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    
<!-- Navigation section starts  -->

<header class="header">

    <a href="../index.php" class="logo"> <i class="fas fa-shopping-basket"></i> &nbsp; Green Mart</a>

    <nav class="navbar">
        <a href="../index.php">Home</a>
        <a href="../Pages/Product.php">Products</a>
        <a href="../Pages/Contactus.php">Contact Us</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="../Pages/searchpage.php" class="search-form" method="POST">
        <input type="search" name="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>
    
    <?php
        session_start(); 
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
        <p>don't have an account <a href="../userregisteration.php">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<!-- Navigation section Ends  -->

<!--Whatsapp Integration-->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-dc1c5087-a51b-4ce0-9b2f-4c520bbf6749"></div>
<!--End of Whatsapp Integration-->


<!--Start of Product Frequency HTML Code-->
<body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bx-cart'></i>
        <span class="logo_name">Green Mart</span>
      </div>
        <?php include("../admin_pages/admin_page_navigation.php"); ?>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">Product Analysis</span>
        </div>
      </nav>
  
      <div class="home-content">
        
  
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Regrular Customers</div>
            <div class="sales-details">
              <!-- <ul class="details">
                <li class="topic">Date</li>
              
              </ul> -->
              <ul class="details">
              <li class="topic">Customer</li>
           
            </ul>
            <ul class="details">
              <li class="topic">Product Name</li>
            
            </ul>
            <ul class="details">
              <li class="topic">Quantity</li>
            </ul>

            <ul class="details">
                <li class="topic">Frequecy</li>
            </ul>

            </div>
            <!--Start of Product Frequency PHP Code-->
            <?php
              $qry = "select useriid,productname,quantity,count(price) from cartdetails";
              $res = mysqli_query($con,$qry);
              while($row = mysqli_fetch_assoc($res)){
                ?>
                <div class="sales-details">
              <!-- <ul class="details">
                <li class="topic">Date</li>
              
              </ul> -->
              <ul class="details">
              <li class="topic"><?php echo $row["useriid"]; ?></li>
           
            </ul>
            <ul class="details">
              <li class="topic"><?php echo $row["productname"];?></li>
            
            </ul>
            <ul class="details">
              <li class="topic"><?php echo $row["quantity"];?> </li>
            </ul>

            <ul class="details">
                <li class="topic"><?php echo $row["count(price)"];?></li>
            </ul>
            
            </div>
                <?php
              }
            ?>
            <!--End of Product Frequency PHP Code-->
            <div class="button">
              <a href="#">See All</a>
            </div>
          </div>

          
          
          </div>
        </div>
      </div>
    </section>
  

    <script>
     let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".sidebarBtn");
  sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
    sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
  }else
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  }
   </script>


<!--End of Product Details HTML Code-->
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
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
            <a href="../Pages/Product.php" class="links"> <i class="fas fa-arrow-right"></i>Product</a>
            <a href="../Pages/Contactus.php" class="links"> <i class="fas fa-arrow-right"></i>Contact Us</a>
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