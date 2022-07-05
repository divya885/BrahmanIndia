<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "brahmanIndia_db";

// Create Connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check Connection
if(mysqli_connect_errno())
{
    die("Failed to connect with MySql:".mysqli_connect_errno());
}
?>