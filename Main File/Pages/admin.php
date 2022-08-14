<?php session_start(); 
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
    <title>Admin Dashboard </title>
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


<!--main dashboard code-->
<body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bx-cart'></i>
        <span class="logo_name">Green Mart</span>
      </div>
      <ul class="nav-links">
          <li>
            <a href="./admin.php" class="active">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="links_name">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="../admin_pages/categories.php">
              <i class="fab fa-buffer"></i>
              <span class="links_name">Product Category</span>
            </a>
          </li>
          <li>
            <a href="../admin_pages/details.php">
              <i class='bx bx-box' ></i>
              <span class="links_name">Product Details</span>
            </a>
          </li>
          <li>
            <a href="../admin_pages/orders.php">
              <i class='bx bx-list-ul' ></i>
              <span class="links_name">My Orders</span>
            </a>
          </li>
         
          <li>
            <a href="../admin_pages/frequent_cus.php">
              <i class='bx bx-up-arrow-alt' ></i>
              <span class="links_name">Product Analysis</span>
            </a>
          </li>
          <li>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
        </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">Dashboard</span>
        </div>
      </nav>
  
      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Order</div>
              <div class="indicator">
                <i class='bx bx-up-arrow-alt'></i>
                <span class="text">Up from yesterday</span>
              </div>
            </div>
            <i class='bx bx-cart-alt cart'></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Sales</div>
              <div class="indicator">
                <i class='bx bx-up-arrow-alt'></i>
                <span class="text">Up from yesterday</span>
              </div>
            </div>
            <i class='bx bxs-cart-add cart two' ></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Profit</div>
              <div class="indicator">
                <i class='bx bx-up-arrow-alt'></i>
                <span class="text">Up from yesterday</span>
              </div>
            </div>
            <i class='bx bx-cart cart three' ></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Return</div>
              <div class="indicator">
                <i class='bx bx-down-arrow-alt down'></i>
                <span class="text">Down From Today</span>
              </div>
            </div>
            <i class='bx bxs-cart-download cart four' ></i>
          </div>
        </div>
  
      <div class="home-content">
        
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Recent Sales</div>
            <div class="sales-details">
              <!-- <ul class="details">
                <li class="topic">Date</li>
              
              </ul> -->
              <ul class="details">
              <li class="topic">Customerid</li>
           
            </ul>
            <ul class="details">
              <li class="topic">Product Name</li>
            
            </ul>
            <ul class="details">
              <li class="topic">Quantity</li>
            </ul>

            <ul class="details">
                <li class="topic">Price</li>
            </ul>

            </div>
            <?php
              $qry = "select * from cartdetails";
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
                <li class="topic"><?php echo $row["price"];?></li>
            </ul>
            
            </div>
                <?php
              }
            ?>
            
            <div class="button">
              <a href="#">See All</a>
            </div>
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

<!--end of dashboard code-->
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