<?php
    session_start();
    include("../db.php");
    $productname = $_POST["search"];
    $qry = "SELECT * from productdetails where productname like '$productname'";
    $res = mysqli_query($con,$qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Search Page</title>
    <link rel="Icon" href="../image/webiste icon.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<!--Whatsapp Integration-->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-dc1c5087-a51b-4ce0-9b2f-4c520bbf6749"></div>
<!--End of Whatsapp Integration-->

    
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
        <input type="search" id="search-box" name="search" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
            
        <a href="cart.php" class="btn">checkout</a>
    </div>
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
        <p>don't have an account <a href="./Account.html">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>

<!-- Navigation section Ends  -->


<!-- Search Pages Section Starts  -->
<section class="products" id="products">

    <br/>
    <br/>
    <br/>
    <br/>
    <h1 class="heading"> Selected <span>Products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">
<?php
        while($row = mysqli_fetch_assoc($res)){
?>
    <form method="post" action="./cart.php?action=add&id=<?php echo $row['id']; ?>">

        <div class="swiper-slide box">
        <img src="<?php echo $row['image']; ?>" alt="">
        <h3><?php echo $row["productname"]; ?></h3>
        <p><?php echo $row["quantity"]; ?> Kg</p>
        <div class="price">₹ <?php echo $row["price"]; ?></div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i><br/>
            <div class="product-icons">
            <a href="./Pages/Favourite.html" class="links"><i class="fas fa-heart"></i></a> &nbsp; <a href="./Product Details/deatilscarrot.html" class="links"><i class="far fa-eye"></i></a> &nbsp; <a href="https://web.whatsapp.com/" class="links"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
        <input type="hidden" name="hidden_name" value="<?php echo $row['productname']; ?>" />
        <input type="hidden" name="hidden_quantity" value="<?php echo $row['quantity']; ?>" />
        <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>" />
        <!-- <a href="./Cart/cart.html" class="btn">add to cart</a> -->
        <input type="submit" name="add_to_cart" class="btn" value="Add to Cart" />
    </div>
    </form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
<?php

    }
?>
            
        </div>

    </div>
</section>
<!-- Search Pages Section Ends  -->


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