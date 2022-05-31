<?php

  $dbhost= "localhost";
  $dbuser="root";
  $dbpass="";
  $dbname="user_information";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass,  $dbname);

  if(!$conn)
  {
    die("Database connection failed");
  }

?>