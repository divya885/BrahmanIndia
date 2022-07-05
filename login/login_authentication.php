<?php
  session_start();
include('db_connection.php');

 $mail=$_POST['email'];
 $pswd=$_POST['password'];
  
  //to prevent from mysqli injection
 $mail=stripcslashes($mail);
 $pswd=stripcslashes($pswd);
 $mail=mysqli_real_escape_string($conn,$mail);
 $pswd=mysqli_real_escape_string($conn,$pswd);
   
 $sql = "SELECT * FROM tourists WHERE Email='$mail' AND Password='$pswd'";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 $count = mysqli_num_rows($result);

 if ($count == 1) 
 {
    echo "Logged in!";
    header("Location:../tourists/tourist-dashboard.php");
    exit();
 }
 else
 {
   $_SESSION['error']="Incorrect email address or password.";
   header("Location:login_page.php");
   exit();
 }
?>