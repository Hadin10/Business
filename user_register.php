<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div class="Loginbox">
        <img src="avatar.png" class="avater">
        <h1>
            Register Here
        </h1>
        <form action="" method="post">
            <p>User Name</p>
            <input type="text" name="name" placeholder="Enter your user name">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter your email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter your password">
            <p>Confirm Password</p>
            <input type="password" name="corfirm_password" placeholder="Enter your password">
            <input type="submit" name="submit" value="Register">


        </form>

    </div>

</body>

</html>


<?php
           include "connection.php";

           if(isset($_POST['submit']))
            {
              $name= $_POST['name'];
              $email= $_POST['email'];
              $password= $_POST['password'];
              $confirm_password= $_POST['corfirm_password'];

              if("$name" == "" or "$email" == "" or "$password" == "")
              {
                echo "<script>alert('Fill up all field')</script>";
              }
              else
              {
                  
              $sql= "select * from user where email='$email'";
              $result= mysqli_query($conn, $sql);
              if(mysqli_num_rows($result)>0)
              {
                  echo "<script>alert('Email already exist')</script>";
              }
              else
              {
                  
                $sql= "select * from user where user_name='$name'";
                $result= mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    echo "<script>alert('user name already exist')</script>";
                }


                else if($password != $confirm_password)
                {
                   echo "<script>alert('Confirmed password not matched')</script>";
                }

                else 
                {
                    $sql = "INSERT INTO  user(user_name, email, password)
                VALUES ('$name', '$email', '$password' )";
  
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
              }





              

            }
          
        ?>