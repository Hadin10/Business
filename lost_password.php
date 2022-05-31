<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lost password</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="Loginbox">
        <img src="avatar.png" class="avater">
        <h1>
            New password
        </h1>
        <form action="" method="post">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter your email">
            <p>New Password</p>
            <input type="password" name="password" placeholder="Enter your new password">
            <p>Confirm New Password</p>
            <input type="password" name="confirm_password" placeholder="Enter your new password">
            <input type="submit" name="submit" value="Change">

        </form>

    </div>

</body>

</html>



<?php
include "connection.php";

if(isset($_POST['submit']))
{
    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirm_password= $_POST['confirm_password'];

    $sql="select * from user where email='$email' ";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==0)
    {
        echo "<script>alert('Email dose not exist')</script>";
    }
    else if($password != $confirm_password)
    {
        echo "<script>alert('Confirmed password not matched')</script>";
    }
    else
    {
        $sql = "UPDATE  user set password='$password' WHERE email='$email' ";

     $run= mysqli_query($conn, $sql);

     if(!$run)
     {
         echo("something wrong");
     }
     else
     {
         header("Location: login.php");
     }
    }

   

   
}



?>