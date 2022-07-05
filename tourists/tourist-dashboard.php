<!DOCTYPE html>

<html>

<head>
  <link rel="shortcut icon" href="../images/india.jpg" type="image/jpg"/>
    <title>BOOK TRIP</title>

    <link rel="stylesheet" href="../css/tourist_dashboard.css">

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
                <li><a href="../feedback/feedback_page.php">FeedBack</a></li>
                <li><a href="../tourist_guides/tourist_guides.html">Tourist Guides</a></li>
                <li><a href="../login/logout.php">LogOut</a></li>
            </ul>
        </div>
      </header>
<br><br><br><br><br><br><br>

      <?php
        session_start();
        if(!empty($_SESSION))
        {
          echo "<h2 class='info'><span class='infospan'>".$_SESSION["message"]."</span></h2>";
          session_unset();
        }
      ?>
      <?php
      if(empty($_SESSION)) {?>
     <form action="trip-authentication.php" method="post">
     
        <h2>Select your dream place to visit!!!</h2>
       
        
        <label>User Name</label> <input type="text" name="uname" placeholder="User Name" required/><br>
       
        <label>Email</label>

        <input type="email" name="email" placeholder="eg@gmail.com" required><br>

        <label>Contact</label>

        <input type="numeric" name="contact" placeholder="Contact Number" required><br>
        
        <label>Select place you like to visit :</label>
        <select name="places[]"  multiple required>
          <option>India Gate</option>
          <option>Kedarnath</option>
          <option>Vaishnodevi</option>
          <option>Taj Mahal</option>
          <option>Qutub Minar</option>
          <option>Baga Beach</option>
          <option>Janmashtami</option>
        </select>
        <br><br>
        <label>Select your Tour Guide :</label>
        <select name="guides[]" required >
          <option>Person ABC</option>
          <option>Person XYZ</option>
        </select>
        <br><br>
        <label>Dates at which you like to visit</label>

        <input type="text" name="datesv" placeholder="03-12-2002 to 05-12-2002" required><br>
        <button type="submit" name="trip_btn">Book_Your_Trip</button>

     </form>
     <?php } ?>
     
     

</body>

</html>
