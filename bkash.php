<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bkash_order</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body>
    <div class="Loginbox" id="bkash_nogod_DB">
        <form action="" method="post">
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter your name">
            <p>Address</p>
            <input type="text" name="address" placeholder="Enter your address">
            <p>Contact number</p>
            <input type="text" name="contact" placeholder="Enter your contact number">
            <p>Transaction id</p>
            <input type="text" name="transaction" placeholder="Enter transaction id">
            <p>Product code</p>
            <input type="text" name="code" placeholder="Enter product code">
            <p>Quantity</p>
            <input type="number" name="quantity" placeholder="Enter quantity">
            <input type="submit" name="submit" value="Submit">


        </form>

    </div>

</body>

</html>


<?php
           include "connection.php";

           if(isset($_POST['submit']))
            {
              $name= $_POST['name'];
              $address= $_POST['address'];
              $contact= $_POST['contact'];
              $transaction= $_POST['transaction'];
              $code= $_POST['code'];
              $quantity= $_POST['quantity'];

              if("$name" == "" or "$address" == "" or "$contact" == "" or "$code" == "" or "$quantity" == "" or "$transaction" == "")
              {
                echo "<script>alert('Fill up all field')</script>";
              }

                else 
                {
                    $sql = "INSERT INTO  bkash_order(name, address, contact_number, transaction_id, product_code, quantity)
                VALUES ('$name', '$address', '$contact', '$transaction', '$code', '$quantity')";
  
                $run= mysqli_query($conn, $sql);
  
                if(!$run)
                {
                    echo("something wrong");
                }
                else
                {
                    header("Location: product.php");
                }
                }
            }
          
?>