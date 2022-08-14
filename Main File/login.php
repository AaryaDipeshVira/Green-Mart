<?php
//code for login (starts)
    session_start();
    include("db.php");
    $name = $_POST["email"];
    $pass = $_POST["pass"];

    $qry = "SELECT * from users where emailid = '$name' and password = '$pass'";
    // echo $qry;
    $res = mysqli_query($con,$qry);
    $row = mysqli_fetch_assoc($res);
    $userid = $row["id"];
    if($userid > 0){
        echo "<script>alert('Logged in successfully!');window.location.href='index.php';</script>";
        $_SESSION["userid"] = $name;
        $HTTP_SESSION_VARS["userid"]=&$_SESSION["userid"];
    }
    else{
        echo "<script>alert('Something went wrong!');</script>";
        // window.location.href='index.php';
    }
    //code for login (ends)
?>
