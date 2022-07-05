<!DOCTYPE html>

<html>

<head>
  <link rel="shortcut icon" href="../images/india.jpg" type="image/jpg"/>
    <title>Tourist  SIGN UP</title>

    <link rel="stylesheet" href="../css/register.css">

</head>

<body>

    <header>
        
        <div class="menu-btn"></div>
        <div class="nav-bar">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../about/about.html">About</a></li>
                <li><a href="#">Catalogue &#8681;</a>
                    <ul class="drop">
                        <li class="list"><a href="../catalogue/festival.html">Festivals</a></li>
                        <li class="list"><a href="../catalogue/pilgrimage1.html">Pilgrimage</a></li>
                        <li class="list"><a href="../catalogue/advanture.html">Adventure</a></li>
                        <li class="list"><a href="../catalogue/historic.html">Historic</a></li>
                        <li class="list"><a href="../catalogue/naturelust.html">Nature-Lust</a></li>
                    </ul>
                </li>
                <li><a href="../feedback/feedback_page.php">Feedback</a></li>
                <li><a href="../tourist_guides/tourist_guides.html">Tourist Guides</a></li>
                
            </ul>
        </div>
    </header>
      
     <form action="register_authentication.php" method="post">
        <h2>SIGN UP FORM !!!</h2>

        <?php session_start(); if(!empty($_SESSION)) { ?>

         <?php echo "<h2 class='info'><span class='infospan'>".$_SESSION["message"]."</span></h2>";?>
         <?php session_unset();?>
        <?php } ?>
        
        <label>User Name</label> <input type="text" name="uname" placeholder="User Name" required/><br>
       
        <label>Email</label>

        <input type="email" name="email" placeholder="eg@gmail.com" required ><br>

        <label>Contact</label>

        <input type="numeric" name="contact" placeholder="Contact Number" required><br>
        
        <label>State</label>

        <input type="text" name="state" placeholder="State-name" required><br>

        <label>Country</label>

        <input type="text" name="country" placeholder="Country-name" required><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password" required><br> 

        <label>Confirm Password</label>

        <input type="password" name="confirmpassword" placeholder="Password" required><br> 

        <button type="submit" name="register_btn">Register</button>

     </form>
     
     <h2>Already have an account ?<a href="./login_page.php">Login Here</a></h2>
     

</body>

</html>

