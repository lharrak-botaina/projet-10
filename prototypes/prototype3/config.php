<?php
   $connectDB = mysqli_connect('localhost', 'boutaina', 'test123', 'employees_db');

   // check connection
 if(!$connectDB){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>