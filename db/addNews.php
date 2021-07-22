<?php
    function addToNewsletter($name, $mail){
        $res = '';
        //connect to database
        include("db_connect.php");
        $sql = "INSERT INTO `newsletter` ( `Email`,`Name`) VALUES ('$mail', '$name')";
        //query db
        if (mysqli_query($conn, $sql)) {
            $res = "New record created successfully";
        }else{
            $res = " Error: retry";
        }
        $conn->close();

        return $res;
    }
    
?>