<?php
    $servername='localhost';
    $username='**ENTER USERNAME HERE**';
    $password='**ENTER PASSWORD HERE**';
    $dbname = "stundenplan";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server');
        }
?>
