<?php
   $servername = "localhost";
   $username = "20mca010";
   $password = "2348";
   $dbname = "20mca010";
   $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>