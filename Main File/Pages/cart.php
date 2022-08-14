<?php 
session_start();
include "../db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="Icon" href="../image/webiste icon.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<!--Whatsapp Integration-->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-dc1c5087-a51b-4ce0-9b2f-4c520bbf6749"></div>
<!--End of Whatsapp Integration-->

<?php
	if(!$_SESSION["userid"]){
		echo "<script>aler('Please login for proceeding to the cart');window.location.href='index.php';</script>";
	}
	else{

		$userid = $_SESSION["userid"];
	}
	if(isset($_POST["add_to_cart"]))
	{	

		
			$qry = "SELECT * from cartdetails where useriid = '$userid' and productid='".$_GET["id"]."'";
			$res = mysqli_query($con,$qry);
			$row_num = mysqli_num_rows($res);
			$row = mysqli_fetch_assoc($res);
			if($row_num==0)
			{
				
				$qry = "insert into cartdetails(useriid,productid,productname,price,quantity) values('$userid','".$_GET["id"]."','".$_POST["hidden_name"]."','".$_POST["hidden_price"]."','".$_POST["hidden_quantity"]."')";
				echo $qry;
				mysqli_query($con,$qry);
			}
			else
			{
			
				$quantity = (int)$row["quantity"]+1;
				$price = $quantity * (int)$_POST["hidden_price"];
			
				$qry = "update cartdetails set quantity='$quantity',price='$price' where productid='".$_GET["id"]."' and useriid='$userid'";
				// echo '<script>alert("'.$qry.'");</script>';
				mysqli_query($con,$qry);
				
			}
		
		
	}
	if(isset($_POST["btnOrder"])){
		$qryDel = "DELETE from cartdetails where useriid='$userid'";
		if(mysqli_query($con,$qryDel)){
			echo '<script>alert("Order Placed Successfully");</script>';
	
			echo '<script>window.location="../index.php"</script>';
		}
	}
	if(isset($_GET["action"]))
	{
		if($_GET["action"] == "delete")
		{
			
				
					$qry = "delete from cartdetails where productid='".$_GET["id"]."' and useriid = '$userid'";
					mysqli_query($con,$qry);
					echo '<script>alert("Item Removed")</script>';
					echo '<script>window.location="../index.php"</script>';
			
		}
	}

?>



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


<!-- cart section starts  -->
<section class="home-section">
  
      <div class="home-content">
        
  
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Cart Details</div>
            <div class="sales-details">
              <!-- <ul class="details">
                <li class="topic">Date</li>
              
              </ul> -->
              <ul class="details">
              <li class="topic">Item Name</li>
           
            </ul>
            <ul class="details">
              <li class="topic">Quantity</li>
            
            </ul>
            <ul class="details">
              <li class="topic">Total Price</li>
            </ul>

            <ul class="details">
                <li class="topic">Action</li>
            </ul>
            </div>
            
            <!-- add here -->
            <?php
					// if(!empty($_SESSION["shopping_cart"]))
					// {
						$total = 0;
						$userid = $_SESSION["userid"];
						$qry = "SELECT * from cartdetails where useriid='$userid'";
						// echo $qry;
						$res = mysqli_query($con,$qry);
						$row_num = mysqli_num_rows($res);
						if($row_num == 0){
							?>
							<div class="sales-details">
						<ul class="details">
              				<li class="topic"><h4>No products in cart, continue shopping</h4></li>
           
            			</ul>
            		</div>
							<?php
								
						}
						else{


							while($row = mysqli_fetch_assoc($res)){
							
					?>
					<div class="sales-details">
						<ul class="details">
              				<li class="topic"><?php echo $row["productname"]; ?></li>
           
            			</ul>
            			<ul class="details">
              				<li class="topic"><?php echo $row["quantity"]; ?></li>
           
            			</ul>
            			<ul class="details">
              				<li class="topic"><?php echo "₹".$row["price"]; ?></li>
           
            			</ul>
            			
            			<ul class="details">
              				<li class="topic"><a href="cart.php?action=delete&id=<?php echo $row["productid"]; ?>">Remove</a></li>
            			</ul>
					</div>

					<?php
							$total = $total + ((int)$row["quantity"] * (int)$row["price"]);
						}
					
					?>
					<div class="sales-details">
						<ul class="details">
                			<li class="topic" style="color:green">Total</li>
            			</ul>
					</div>
					<div class="sales-details">
						<ul class="details">
                			<li class="topic">₹ <?php echo number_format($total, 2); ?></li>
            			</ul>
					</div>
					
					<?php
					}

					?>
				
            <!-- before here-->
            <div class="button">
            	<?php
					// if(!empty($_SESSION["shopping_cart"]))
					// {
						$total = 0;
						$userid = $_SESSION["userid"];
						$qry = "SELECT * from cartdetails where useriid='$userid'";
						// echo $qry;
						$res = mysqli_query($con,$qry);
						$row_num = mysqli_num_rows($res);
						if($row_num == 0){
							?>
						<button class="btn" onclick="goToIndex()">Continue Shopping</button>
						<script>
							function goToIndex(){
								window.location.href="../index.php";
							}
						</script>
							<?php
								}
								else{
									?>
				<!--Razer Pay Button Start-->
				<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Iy1ZHuZrejiXke" async> </script> </form>
				<!--Razer Pay Button End-->
									<?php 

								}
							?>
              
            </div>
          </div>

          
          
          </div>
        </div>
      </div>
    </section>
<!-- cart section Ends  -->


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