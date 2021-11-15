<?php

// Database connection
$conn = new mysqli('localhost','root','','blood_report');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
 $conn->close();
}
?>