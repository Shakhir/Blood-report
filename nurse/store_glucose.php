<?php
include '../common/database_helper.php';
$p_id = $_POST['p_id'];
$fasting = $_POST['fasting'];
$after_breakfast = $_POST['after_breakfast'];
$date = $_POST['date'];
$result = add_glucose_report($p_id,$fasting,$after_breakfast,$date);
if ($result) {
    echo "Registration successfully...";
    header('Location: ../common/home.php');
    exit();
} else {
    echo "problem occured";
}


?>