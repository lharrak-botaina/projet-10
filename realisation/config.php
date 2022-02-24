<?php
   $conn = mysqli_connect('localhost', 'boutaina', 'test123', 'employees_db');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>