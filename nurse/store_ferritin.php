<?php
include '../common/database_helper.php';
$p_id = $_POST['p_id'];
$ferritin = $_POST['ferritin'];
$date = $_POST['date'];
$result = add_ferritin_report($p_id,$ferritin,$date);
if ($result) {
    echo "Registration successfully...";
    header('Location: ../common/home.php');
    exit();
} else {
    echo "problem occured";
}


?>