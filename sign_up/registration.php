<?php
include '../common/database_helper.php';
$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$role = $_POST['role'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$execval = sign_up($fName,$lName,$role,$email,$password,$number);
if($execval){
    header("Location: ../login/index.php");
    echo "Registration successfully...";
}else{
    header("Location: ../sign_up/index.php");
}
?>