<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div class="Loginbox">
        <img src="avatar.png" class="avater">
        <h1>
            Login Here
        </h1>
        <form action="" method="post">
            <p>User Name</p>
            <input type="text" name="user_name" placeholder="Enter your user name">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter your password">
            <input type="submit" name="submit" value="Login">
            <br />
            <a href="lost_password.php">Lost your password?</a>
            <br />
            <a href="user_register.php">Don't have an account?</a>

        </form>

    </div>

</body>

</html>


<?php
include "connection.php";

if(isset($_POST['submit']))
{
    $name= $_POST['user_name'];
    $password= $_POST['password'];
    $sql="select * from user where user_name='$name' and password='$password' ";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['username']= $_POST['user_name'];
        header('location: user_layout.php');
    }
    else
    {
        echo "<script>alert('User name or password error')</script>";
    }

   
}



?>