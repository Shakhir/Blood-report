<?php
include '../common/database_helper.php';
$user_id=$_SESSION['id'];
$data=get_ferritin_report_by_user_id($_SESSION['id']);
if($data){
    ?>
    <?php if($_SESSION['role']=='n'){ ?>
        </br><a href="../nurse/add_ferritin.php"><button type="button" class="btn btn-success">Add</button></a>

    <?php  } ?>
    </br>
    </br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th class ="text-center">Serum Ferritin</th>
            <th class ="text-center">Date</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach($data as $v){ ?>
            <tr>
                <td class ="text-center"><?php echo $v['ferritin'];?></td>
                <td class ="text-center"><?php echo $v['date'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <?php

} else {
    echo "No Data Found";
}
?>
