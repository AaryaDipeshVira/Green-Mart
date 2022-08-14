<?php
    session_start();
    include("db.php");
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--STARTW-->
    
    <!--End of Website icon script-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Mart</title>
    <link rel="Icon" href="./image/webiste icon.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    
<!-- Navigation section starts  -->

<header class="header">

    <a href="./index.php" class="logo"> <i class="fas fa-shopping-basket"></i> &nbsp; Green Mart</a>

    <nav class="navbar">
        <a href="./index.php">Home</a>
        <a href="./Pages/Product.php">Products</a>
        <!-- <a href="./Pages/Favourite.">Favourite Food List</a> -->
        <a href="./Pages/Contactus.php">Contact Us</a>
        <!-- <a href="./Pages/admin.php">Admin</a> -->
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn" href="./Pages/cart.php"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="./Pages/searchpage.php" class="search-form" method="post">
        <input type="search" name="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
            
        <a href="./Pages/cart.php" class="btn">checkout</a>
    </div>

    <?php
        if(isset($_SESSION["userid"])){
            echo "<font size=3px>" . $_SESSION["userid"] . "</font>";
    ?>
    <form action="logout.php" class="login-form">
        <h3>logout</h3>
        <input type="submit" value="logout" class="btn">
    </form>
    <?php
        }
    ?>
    <form method="POST" action="login.php" class="login-form">
        <h3>login now</h3>
        <input type="email" name="email" placeholder="Your Email" class="box">
        <input type="password" name="pass" placeholder="Your Password" class="box">
        <p>don't have an account <a href="userregisteration.php">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>

<!-- Navigation section Ends  -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Welcome to <span>Green Mart &nbsp;</span>Organic Grocries Sellers</h3>
    </div>

</section>

<!--Whatsapp Integration-->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-dc1c5087-a51b-4ce0-9b2f-4c520bbf6749"></div>
<!--End of Whatsapp Integration-->

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/feature-img-1.png" alt="">
            <h3>fresh and organic food</h3>
            <p>Organic fresh produce and staples. Encouraging you to eat healthier.</p>
        </div>

        <div class="box">
            <img src="image/feature-img-2.png" alt="">
            <h3>free delivery</h3>
            <p>It has quick delivery which enable our customer to meet his deadline – excellent service.</p>
        </div>

        <div class="box">
            <img src="image/feature-img-3.png" alt="">
            <h3>easy payments</h3>
            <p>This website supports easy  payments on best deals and offers.</p>
        </div>

    </div>

</section>

<!-- features section ends -->

<!--Slider Banner-->
<h1 class="heading"> Flat <span>50% off</span> </h1>
<section class="banner-container">

    <div class="banner">
        <img src="./image/hero element/hero-1.png" alt="">
        <div class="content">
            <span>Organic Mango</span>
            <h3>upto 50% off</h3>
            <a href="./Product Details/mango.html" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="./image/hero element/hero-2.png" alt="">
        <div class="content">
            <span>Fresh Guava</span>
            <h3>upto 50% off</h3>
            <a href="./Product Details/Guava.html" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="./image/hero element/hero-3.png" alt="">
        <div class="content">
            <span>Best Vegitables</span>
            <h3>upto 50% off</h3>
            <a href="./Product Details/Vegitables.html" class="btn">shop now</a>
        </div>
    </div>

</section>

<!--End of Slider Banner-->

<!-- products section ends -->

<!-- categories section starts  -->
<section class="products" id="products">

    <br/>
    <br/>
    <br/>
    <br/>
    <h1 class="heading"> Popular <span>Products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">
          
            <div class="swiper-slide box">
                <img src="./image/Vegitables/fresh carrot.png" alt="">
                <h3>Fresh Carrot</h3>
                <p>1kg</p>
                <div class="price">₹ 30</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i><br/>
                    <div class="product-icons">
                    <a href="./Product Details/deatilscarrot.html" class="links"><i class="far fa-eye"></i></a> &nbsp; <a href="https://web.whatsapp.com/" class="links"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="./image/Fruits/banana.png" alt="">
                <h3>Organic Banana</h3>
                <p>4pcs</p>
                <div class="price">₹ 49</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i><br/>
                    <div class="product-icons">
                    <a href="./Product Details/deatilsbanana.html" class="links"><i class="far fa-eye"></i></a> &nbsp; <a href="https://web.whatsapp.com/" class="links"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="./image/Milk Products/Butter.png" alt="">
                <h3>Amul Butter</h3>
                <p>500g</p>
                <div class="price">₹ 48</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i><br/>
                    <div class="product-icons">
                    <a href="./Product Details/butter.html" class="links"><i class="far fa-eye"></i></a> &nbsp; <a href="https://web.whatsapp.com/" class="links"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="./image/Meat/Img(8).png" alt="">
                <h3>Fresh Meat</h3>
                <p>1kg</p>
                <div class="price">₹ 100</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i><br/>
                    <div class="product-icons">
                   <a href="./Product Details/deatilsmeat.html" class="links"><i class="far fa-eye"></i></a> &nbsp; <a href="https://web.whatsapp.com/" class="links"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="./image/Daily Products/aashirvaad atta.png" alt="">
                <h3>Aashirvaad Atta</h3>
                <p>10kg</p>
                <div class="price">₹ 320</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <div class="product-icons">
                    <a href="./Product Details/atta.html" class="links"><i class="far fa-eye"></i></a> &nbsp; <a href="https://web.whatsapp.com/" class="links"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="./image/Daily Products/maggi.png" alt="">
                <h3>Maggi</h3>
                <p>70g</p>
                <div class="price">₹ 11</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <div class="product-icons">
                   <a href="./Product Details/maggiee.html" class="links"><i class="far fa-eye"></i></a> &nbsp; <a href="https://web.whatsapp.com/" class="links"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="./image/Milk Products/Amul Kool.png" alt="">
                <h3>Amul Kool</h3>
                <p>180ml</p>
                <div class="price">₹ 17</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <div class="product-icons">
                    <a href="./Product Details/amulkool.html" class="links"><i class="far fa-eye"></i></a> &nbsp; <a href="https://web.whatsapp.com/" class="links"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="./image/Fruits/fresh orange.png" alt="">
                <h3>Organic Orange</h3>
                <p>4Pcs</p>
                <div class="price">₹ 50</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <div class="product-icons">
                   <a href="./Product Details/orange.html" class="links"><i class="far fa-eye"></i></a> &nbsp; <a href="https://web.whatsapp.com/" class="links"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- categories section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="./image/User.png" alt="">
                <p>It does everything from managing your recipes to storing your grocery list to even keeping track of what you do (and don’t) have in your pantry.Delivery executives are very humble too. Over all I liked the concept and services they have been providing.</p>
                <h3>Aarya</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="./image/User.png" alt="">
                <p>This has been amazing experience for me so far. Have been using the app regularly since summers this year. Green Mart deals are great way of savings. They refund if you report quality issues or missing items. They schedule another day delivery of missing items too.</p>
                <h3>Mahek</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="./image/User.png" alt="">
                <p>Nice products with good discounts. My most favorite is the delivery time, Everytime I received fast delivery within 20-30mins with good packing. Kindly increase products and brands also. Otherwise its a good one. I am totally satisfy with delivery time.</p>
                <h3>Bhavesh</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="./image/User.png" alt="">
                <p>This has made my life so easy, i can make purchase to my home even when i m not around. I dont have to go to a grocery shop anymore with a big list and a big bag on mu bike. Also their rates are much less then big basket. </p>
                <h3>Bhoomi</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

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
            <a href="index.php" class="links"> <i class="fas fa-arrow-right"></i>Home</a>
            <a href="./Pages/Product.php" class="links"> <i class="fas fa-arrow-right"></i>Product</a>
            <a href="./Pages/Contactus.php" class="links"> <i class="fas fa-arrow-right"></i>Contact Us</a>
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
<script src="js/script.js"></script>

</body>
</html>