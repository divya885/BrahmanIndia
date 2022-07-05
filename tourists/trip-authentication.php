<?php 

    session_start();
    require_once('../login/db_connection.php');
    
    if(isset($_POST['trip_btn']))
    {
        $UserName = mysqli_real_escape_string($conn,$_POST['uname']);
        $Email = mysqli_real_escape_string($conn,$_POST['email']);
        $Contact = mysqli_real_escape_string($conn,$_POST['contact']);
        $Places = [];
        foreach($_POST['places'] as $pl)
        {   $Places[] = mysqli_real_escape_string($conn,$pl);}
        $Places=implode(",",$Places);
        $TourGuide = [];
        foreach($_POST['guides'] as $g)
        {   $TourGuide[] = mysqli_real_escape_string($conn,$g);}
        $TourGuide=implode(" ",$TourGuide);
        $Datesvisit = mysqli_real_escape_string($conn,$_POST['datesv']);

        $query = "insert into booked_trips (Name,Email,Contact,Place,Tour_Guide,Dates_to_visit) values ('$UserName','$Email','$Contact','$Places','$TourGuide','$Datesvisit')";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            $_SESSION["message"]="Trip registered successfully .";
            //echo ' Trip registered successfully . ';
        }
        else
        {
            $_SESSION["message"]="Error while registering trip.";
            //echo ' Error while registering trip. ';
        }
        print("\n");
        $query2 = "select Email from guides where Name='$TourGuide'";
        $result2 = mysqli_query($conn,$query2);
        if($result2)
        {
            
            while($row=mysqli_fetch_array($result2))
            {
                $to=$row['Email'];
            }
            
            $subject = "\nTrip booking.\n";
            
            $message="<h1>Trip Booked by :-</h1>\n";
            $message.="<h3>Name : ".$UserName."</h3>";
            $message.="<h3>Email : ".$Email."</h3>";
            $message.="<h3>Contact : ".$Contact."</h3>";
            $message.="<h3>Places to visit : ".$Places."</h3>";
            $message.="<h3>Dates of visiting : ".$Datesvisit."</h3>";
            $message.="<h4>Reply to tourist within 24 hours for confirmation.</h4>";
            $message.="<h4>Reply at ".$Email." or Contact at ".$Contact."</h4>";
            $header="From:solankidivya885@gmail.com \r\n";
            $header.="Cc:".$Email." \r\n";
            $header.="MIME-VERSION: 1.0\r\n";
            $header.="Content-type: text/html\r\n";
            
            $retval=mail($to,$subject,$message,$header);
            if($retval==true)
            {
                $_SESSION["message"].="Confirmation by tour guide will be received in 24 hours !!!";
                header("location:tourist-dashboard.php");
                //echo "Confirmation by tour guide will be received in 24 hours !!!";
            }
            else{
                
                $_SESSION["message"].="Error while updating tour guide.".
                header("location:tourist-dashboard.php");
                //echo "Error while updating tour guide.";
            }
        }
        
    }


?>