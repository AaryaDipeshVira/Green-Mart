<?php
//code for registration (start)
    session_start();
    include("db.php");
    if(isset($_SESSION["userid"])){
        header('location:index.php');
    }
    if(isset($_POST["btnRegister"])){
        $name = $_POST["name"];
        $emailid = $_POST["email"];
        $phonenumber = $_POST["phonenumber"];
        $userlocation = $_POST["clocation"];
        $password = $_POST["pass"];
        $repass = $_POST["re_pass"];
        if($password != $repass){
            echo "<script>alert('Password doesnot match');</script>";
        }
        else{
            $qry = "INSERT into users(name,emailid,phonenumber,userlocation,password) values('$name','$emailid','$phonenumber','$userlocation','$password');";
            if(mysqli_query($con,$qry)){
                echo "<script>alert('User registered successfully! Now please login');window.location.href='index.php';</script>";
            }    
            else{
                echo "<script>alert('Something went wrong');</script>";
            }
        }
        
    }
    //code for registration (ends)
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
    <title>Registration Page</title>
    <link rel="Icon" href="image/webiste icon.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Register Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Register Main css -->
    <link rel="stylesheet" href="Registration Form/css/style.css">

</head>
<body>
    
<!-- Navigation section starts  -->

<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-shopping-basket"></i> &nbsp; Green Mart</a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="./Pages/Product.php">Products</a>
        <!-- <a href="./Pages/Favourite.">Favourite Food List</a> -->
        <a href="./Pages/Contactus.php">Contact Us</a>
        <!-- <a href="./Pages/admin.php">Admin</a> -->
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <form action="login.php" class="login-form">
        <h3>login now</h3>
        <input type="email" name="email" placeholder="Your Email" class="box">
        <input type="password" name="pass" placeholder="Your Password" class="box">
        <p>don't have an account <a href="userregisteration.php">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>

<!-- Navigation section Ends  -->
<!--Whatsapp Integration-->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-134380d7-a05c-4e81-8004-585193dc10c2"></div>
<!--End of Whatsapp Integration-->
<br/>
<br/>

<!--Start of Registration Form --->
<div class="main">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Register Now</h2>
                    <form method="POST" class="register-form" id="register-form" action="userregisteration.php">
                        <?php
                            if(isset($_POST["name"])){
                        ?>
                            <div class="form-group">
                                <label for="name"><i class="fas fa-user"></i></label>
                                <input type="text" name="name"  placeholder="Your Name" value='<?php echo "$name"; ?>'/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i></label>
                                <input type="email" name="email"  placeholder="Your Email"  value='<?php echo "$emailid"; ?>'/>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="fas fa-phone-alt"></i></label>
                                <input type="text" name="phonenumber"  placeholder="Phone Number"   value='<?php echo "$phonenumber"; ?>'/>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="fas fa-map-marker-alt"></i></label>
                                <input type="text" name="clocation"  placeholder="Location" value='<?php echo "$userlocation"; ?>'/>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="fas fa-lock"></i></label>
                                <input type="password" name="pass"  placeholder="Password"  value='<?php echo "$password"; ?>'/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="fas fa-lock"></i></label>
                                <input type="password" name="re_pass" placeholder="Reenter Your Password"   value='<?php "$repass"; ?>'/>
                            </div>
                        <?php
                            }
                            else{
                        ?>
                            <div class="form-group">
                                <label for="name"><i class="fas fa-user"></i></label>
                                <input type="text" name="name"  placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i></label>
                                <input type="email" name="email"  placeholder="Your Email"/>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="fas fa-phone-alt"></i></label>
                                <input type="text" name="phonenumber"  placeholder="Phone Number"/>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="fas fa-map-marker-alt"></i></label>
                                <input type="text" name="clocation"  placeholder="Location"/>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="fas fa-lock"></i></label>
                                <input type="password" name="pass"  placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="fas fa-lock"></i></label>
                                <input type="password" name="re_pass" placeholder="Reenter Your Password"/>
                            </div>
                        <?php
                            }
                        ?>

                        <div class="form-group form-button">
                            <input type="submit" value="Register" name="btnRegister" class="btn">
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="./image/Register Img.jpg" alt="sing up image"></figure>
                    <a href="index.php" class="signup-image-link"><i class="fas fa-user"></i> &nbsp; Already have an account</a>
                </div>


            </div>
        </div>
    </section>

<!-- JS -->
<script src="./Registration Form/vendor/jquery/jquery.min.js"></script>
<script src="./Registration Form/js/main.js"></script>
<!--End of Registartion Form-->

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
<script src="./js/script.js"></script>

</body>
</html>