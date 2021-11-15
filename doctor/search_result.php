
<?php include '../common/header.php';?>
<?php include '../common/menu.php';?>
<?php include '../common/database_helper.php';?>
<?php
$p_id = $_POST['p_id'];
$report_type = $_POST['report_type'];
if($report_type=='glucose'){
    $data = get_glucose_report_by_user_id($p_id);

}else if($report_type=='ferritin'){
    $data = get_ferritin_report_by_user_id($p_id);
}
if($data && $report_type=='glucose' ){
    ?>

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
        <?php if($_SESSION['role']=='n'){ ?>
            <td class ="text-center">
                <a href="delete.php?id=<?php echo $v['id'];?>">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
                <a href="../common/edit.php?id=<?php echo $v['id']?>&reportName=glucose">
                    <button type="button" class="btn btn-success">Edit</button>
                </a>
            </td>
        <?php  } ?>
        </tr>
    <?php } ?>
    </tbody>
    </table>
    <?php
}elseif($data){
    ?>

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
            <td class ="text-center"><?php echo $v['date'];?>
                <?php if($_SESSION['role']=='n'){ ?>
            <td class ="text-center">
                <a href="delete.php?id=<?php echo $v['id'];?>">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
                <a href="../common/edit.php?id=<?php echo $v['id']?>&reportName='ferritin'">
                <button type="button" class="btn btn-success">Edit</button>
                </a>
            </td>
                <?php  } ?>
        </tr>
    <?php } ?>
    </tbody>
    </table>
    <?php
} else {
    echo "No Data Found";
}
?>

<?php include '../common/footer.php';?>