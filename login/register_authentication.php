<?php 

    session_start();
    require_once('db_connection.php');

    if(isset($_POST['register_btn']))
    {
        $UserName = mysqli_real_escape_string($conn,$_POST['uname']);
        $Email = mysqli_real_escape_string($conn,$_POST['email']);
        $Contact = mysqli_real_escape_string($conn,$_POST['contact']);
        $State = mysqli_real_escape_string($conn,$_POST['state']);
        $Country = mysqli_real_escape_string($conn,$_POST['country']);
        $Password = mysqli_real_escape_string($conn,$_POST['password']);
        $CPassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);

        $sql = "SELECT * FROM tourists WHERE Email='$Email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) 
        {
            $_SESSION['message']="Account already exists with this Email Address.";
            header("Location:register.php");
            exit();
        }
        else
        {
            if($Password!=$CPassword)
            {
                $_SESSION['message']="Password Not matched.";
                header("Location:register.php");
            }
            else
            {
                //$pass=md5($Password);
                $query = "insert into tourists (Name,Email,Password,Contact,State,Country) values ('$UserName','$Email','$Password','$Contact','$State','$Country')";
                $result = mysqli_query($conn,$query);

                if($result)
                {
                    $_SESSION['message']="Registration successfull.Login with your details.";
                    header("Location:register.php");
                }
                else
                {
                    $_SESSION['message']="Registration unsuccessfull.";
                    header("Location:register.php");
                }
            }
        }
    }


?>