<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'Myke', 'admin', 'modelist'); 
    
    //check connection
    if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
    }
?>