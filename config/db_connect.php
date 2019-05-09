<?php
    //connect to db
    $conn = mysqli_connect('localhost', 'admin', 'admin1234', 'plantatree');

    //check conn
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
    
?>