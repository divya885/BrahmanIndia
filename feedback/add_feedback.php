<?php 

    session_start();
    require_once('../login/db_connection.php');

    if(isset($_POST['feedback_btn']))
    {
        $UserName = mysqli_real_escape_string($conn,$_POST['Name']);
        $Email = mysqli_real_escape_string($conn,$_POST['Email']);
        $Place = mysqli_real_escape_string($conn,$_POST['Place']);
        $Description = mysqli_real_escape_string($conn,$_POST['Description']);
        
        
        $query = "insert into feedback (Name,Email,Place_or_Culture,Description_or_Experience) values ('$UserName','$Email','$Place','$Description')";
        $result = mysqli_query($conn,$query);

                if($result)
                {
                    $_SESSION['message']="Thanks for providing your Feedback !!!";
                    header("Location:feedback_page.php");
                }
                else
                {
                    $_SESSION['message']="Error while noting your feedback.Try again.";
                    header("Location:feedback_page.php");
                }
          
        
    }


?>