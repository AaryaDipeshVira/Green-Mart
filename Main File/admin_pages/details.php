<?php
// Start of Product Details PHP Code
  include "../db.php";
  if(isset($_POST["btnSubmit"])){
    $shop_name = $_POST["shop_name"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $quantity = $_POST["quantity"];
    $product_description = $_POST["product_description"];
    $product_category = $_POST["product_category"];
    $file = $_FILES["uploadFile"]["name"];
    $file_path="../image/".basename($_FILES["uploadFile"]["name"]);
    move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $file_path);

    $qry = "insert into productdetails(shopname,productname,price,quantity,description,category,image) values('$shop_name','$product_name','$product_price','$quantity','$product_description','$product_category','$file_path')";

    if(mysqli_query($con,$qry)){
      echo "<script>alert('Record inserted successfully');</script>";
    }
    else{
      echo "<script>alert('Something went wrong'+'".mysqli_error($con)."');</script>";
    }
  }
  // End of Product Details PHP Code
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

    <!--Font Awsome Kit-->
    <script src="https://kit.fontawesome.com/8665233ef3.js" crossorigin="anonymous"></script>

    <!--header file for  admin dashboard-->
    <meta charset="UTF-8">
    <title>Product Details</title>
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
        <p>forget your password <a href="../Pages/Forgot.html">click here</a></p>
        <p>don't have an account <a href="../userregisteration.php">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>
<br/>
<br/>
<br/>
<br/>
<!-- Navigation section Ends  -->

<!--Whatsapp Integration-->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-dc1c5087-a51b-4ce0-9b2f-4c520bbf6749"></div>
<!--End of Whatsapp Integration-->

<!--Start of Product Details HTML Code-->
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
          <span class="dashboard">Product Details</span>
        </div>
      </nav>
     
       <!-- Sign up form -->
    <section class="signup">
      <div class="container">
          <div class="signup-content">
              <div class="signup-form">
                  <h2 class="form-title">Uplode Your Product Here</h2>
                 <form method="POST" class="product-uplode-form" id="product-uplode-form" action="details.php" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="shop_name"><i class="fas fa-store-alt"></i></label>
                          <input type="text" name="shop_name" id="shop_name" placeholder="Shop Name"/>
                      </div>
                      <div class="form-group">
                        <label for="product_name"><i class="fab fa-product-hunt"></i></label>
                        <input type="text" name="product_name" id="product_name" placeholder="Product Name"/>
                    </div>
                      <div class="form-group">
                          <label for="product_price"><i class="fas fa-money-bill-alt"></i></label>
                          <input type="number" name="product_price" id="product_price" placeholder="Product Price"/>
                      </div>

                      <div class="form-group">
                          <label for="quantity"><i class="fas fa-exchange-alt"></i></label>
                          <input type="number" name="quantity" id="quantity" placeholder="Quantity"/>
                      </div>

                      <div class="form-group">
                        <label for="product description"><i class="fas fa-align-center"></i></label>
                        <input type="text" name="product_description" id="product description" placeholder="Enter Product Description"/>
                      </div>

                      <div class="form-group">
                        <label for="product category"><i class="far fa-edit"></i></label>
                        <input type="text" name="product_category" id="product category" placeholder="Enter Product Category"/>
                      </div>

                      <div class="form-group">
                          <label for="uplode_img"><i class="far fa-images"></i></label>
                          Uplode Product-Img:
                          <input type="file" name="uploadFile">
                      </div>

                      <div class="form-group">
                        <button type='button' class='btn' name='delete'><i class="fas fa-trash"></i>&nbsp; Delete Product</button>
                    </div>

                      <div class="form-group form-button">
                          <input type="submit" name="btnSubmit" value="submit" class="btn">
                      </div>

                  </form>
              </div>
              <div class="signup-image">
                  <figure><img src="../image/Shopowner_Registration.jpg" alt="sing up image"></figure>
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


<!--End of Product Details HTML Code-->
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
            
            <div>
                <a href="https://instagram.com/green_mart_grocery_store?utm_medium=copy_link" class="links"> <i class="fab fa-instagram"></i>Follow Us</a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="mailto:greenmart@gmail.com" class="links"> <i class="fas fa-envelope"></i>greenmart@gmail.com</a>
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