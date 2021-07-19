<?php
    function addToNewsletter($name, $surname, $mail){
        $res = '';
        //connect to database
        $conn = mysqli_connect('localhost', 'Myke', 'admin', 'modelist'); 
        //check connection
        if(!$conn){
          echo 'Connection error: ' . mysqli_connect_error(); 
        }
        $sql = "INSERT INTO `newsletter` (`Name`, `Surname`, `Email`) VALUES ('$name', '$surname', '$mail')";
        //query db
        if ($conn->query($sql)) {
            $res = "New record created successfully";
        }else{
            $res = "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

        return $res;
    }
    
?>