<?php
 // Start of Product Categories PHP Code
  include "../db.php";
  if(isset($_POST["btnCategory"])){
    $categoryname = $_POST["product_category"];
    $categorydescription = $_POST["product_description"];
    if($categoryname == "" || $categorydescription ==""){
      echo "<script>alert('The data is empty')</script>";
    }
    else{
      $qry = "INSERT INTO productcategory(categoryname,description) values('".$categoryname."','".$categorydescription."')";
      if(mysqli_query($con,$qry)){
        echo "<script>alert('Record inserted successfully');</script>";
      }
      else{
        echo "<script>alert('Something went wrong');</script>";
      }
    }
  }
  // End of Product Categories PHP Code
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
    <title>Product Category</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Register Main css -->
    <link rel="stylesheet" href="../admin_pages/details.css">

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

<!-- Navigation section Ends  -->

<!--Whatsapp Integration-->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-dc1c5087-a51b-4ce0-9b2f-4c520bbf6749"></div>
<!--End of Whatsapp Integration-->


<!--Start of Product Categories HTML Code-->
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
          <span class="dashboard">Product Categories</span>
        </div>
      </nav>
     
       <!-- Sign up form -->
    <section class="signup">
      <div class="container">
          <div class="signup-content">
              <div class="signup-form">
                  <h2 class="form-title">Mention Your Product Category</h2>
                 <form method="POST" class="product-uplode-form" id="product-uplode-form" action="categories.php">

                      <div class="form-group">
                        <label for="product category"><i class="far fa-edit"></i></label>
                        <input type="text" name="product_category" id="product category" placeholder="Enter Product Category"/>
                      </div>

                      <div class="form-group">
                        <label for="product description"><i class="fas fa-align-center"></i></label>
                        <input type="text" name="product_description" id="product description" placeholder="Mention Product Description"/>
                      </div>

                      <div class="form-group">
                        <!-- <button type='button' class='btn' name='delete'><i class="fas fa-trash"></i>&nbsp; Delete Product Category</button> -->
                    </div>

                      <div class="form-group form-button">
                          <input type="submit" name="btnCategory" value="submit" class="btn">
                      </div>

                  </form>
              </div>
              <div class="signup-image">
                  <figure><img src="../image/product-categories.jpg" alt="sing up image"></figure>
              </div>


          </div>
      </div>
  </section>

<!-- JS -->
<script src="../Registration Form/vendor/jquery/jquery-ui.min.js"></script>
<script src="../Registration Form/js/main.js"></script>
<!--End of Registartion Form-->
      

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


<!--End of Product Categories HTML Code-->
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