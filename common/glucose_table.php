<?php
include '../common/database_helper.php';
$data=get_glucose_report_by_user_id($_SESSION['id']);
if($data){
    ?>
    <?php if($_SESSION['role']=='n'){ ?>
        </br><a href="../nurse/add_glucose.php"><button type="button" class="btn btn-success">Add</button></a>

    <?php  } ?>
    </br>
    </br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th class ="text-center">Glucose Fasting</th>
            <th class ="text-center">Glucose After Breakfast</th>
            <th class ="text-center">Date</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data as $v){ ?>
            <tr>
                <td class ="text-center"><?php echo $v['fasting'];?></td>
                <td class ="text-center"><?php echo $v['after_breakfast'];?></td>
                <td class ="text-center"><?php echo $v['date'];?>
                    <?php if($_SESSION['role']=='n') ?>
<!--                <td class ="text-center"> <a href="edit.php?id=--><?php //echo $v['id'];?><!--"> Edit</a></td>-->
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <?php

} else {
    echo "No Data Found";
}
?>
