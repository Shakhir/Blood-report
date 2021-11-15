<?php
include '../common/connect.php';

function executeSql($sql)
{
    global $conn;
    return mysqli_query($conn, $sql);
}

function get_glucose_report_by_user_id($user_id)
{
    $sql = "select t2.id,t2.user_id,t2.fasting, t2.after_breakfast, t2.date
        from registration as t1
                 inner join glucose as t2 on t1.id = t2.user_id
        where t1.id = '$user_id'
        order by t2.date desc";
    return executeSql($sql);
}

function sign_up($fName,$lName,$role,$email,$password,$number){
    $sql = "insert into registration(firstName, lastName, role, email, password, number) values ('$fName','$lName','$role', '$email', md5('$password'), $number)";
    return executeSql($sql);
}

function add_glucose_report($p_id,$fasting,$after_breakfast,$date){
    $sql = "INSERT INTO `glucose` ( `user_id`, `fasting`, `after_breakfast`, `date`)  VALUES ('$p_id','$fasting','$after_breakfast','$date')";
    return executeSql($sql);
}
function add_ferritin_report($p_id,$ferritin,$date){
    $sql = "INSERT INTO `ferritin` ( `user_id`, `ferritin`, `date`)  VALUES ('$p_id','$ferritin','$date')";
    return executeSql($sql);
}

function get_ferritin_report_by_user_id($user_id)
{
    $sql = "select t2.ferritin, t2.date
            from registration as t1
                inner join ferritin as t2 on t1.id = t2.user_id
            where t1.id = '$user_id' order by t2.date desc";
    return executeSql($sql);
}
function get_glucose_report_by_id($id){
$sql =" select *
        from glucose
        where id=$id";
return executeSql($sql);
}
function get_ferritin_report_by_id($id){
    $sql =" select *
        from ferritin
        where id=$id";
    return executeSql($sql);
}


?>