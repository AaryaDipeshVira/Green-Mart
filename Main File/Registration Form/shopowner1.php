<?php

    $con = mysqli_connect("localhost","root","","shop_owner");

    if(!$con)
    {

        die("Error in connection");
    }
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $sname = $_POST["sname"];
    $sloc = $_POST["slocation"];
    $sphoneno = $_POST["sphone_number"];

    $sql = "insert into Details values('" . $name . "','" . $email . "','" . $pass . "','" . $sname . "','" . $sloc . "','" . $sphoneno . "')";

   if(!mysqli_query($con,$sql))
   {
       die("error in adding records");
   }  
   echo "<H1> record transfer to server successfuly</H1>";
   header("location:http://localhost/Green%20Mart/");
   
   mysqli_close($con);
?>
