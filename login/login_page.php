

<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="../images/india.jpg" type="image/jpg"/>
    <title>Tourist  LOGIN</title>

    <link rel="stylesheet" href="../css/login.css">

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

     <form name="login-page" action="login_authentication.php" method="post">

        <h2>If already registered - LOGIN !!!</h2>

        <?php session_start(); if(!empty($_SESSION['error'])){?>
           <?php echo "<h3 class='info'><span class='infospan'>".$_SESSION["error"]."</span></h3>";;?>
           <?php unset($_SESSION['error']);?>
        <?php } ?>
         
        <label>Email Address</label>

        <input type="email" name="email" placeholder="example@gmail.com" required><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password" required><br> 

        <button type="submit" name="submit">Login</button>

     </form>
     <br><br>
     <h2>New User !!!   Click below...</h2>
     <a href="./register.php">Sign Up</a>
     

</body>

</html>
