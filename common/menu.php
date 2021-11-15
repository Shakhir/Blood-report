<?php
if ($_SESSION['role'] == 'n'){
    $home = '../login/nurse.php';
}elseif ($_SESSION['role'] == 'd'){
    $home = '../login/doctor.php';
}else{
    $home = '../login/patient.php';
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Blood Report</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid ">

    <ul class="nav navbar-nav navbar-left">
            <li class="nav-item active">
                <a class="nav-link" href="../common/home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Reports
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../common/view_glucose.php">Glucose Report</a>
                        <a class="dropdown-item" href="../common/view_ferritin.php">Ferritin Report</a>
                </div>
            </li>

        <?php if($_SESSION['role']!='p'){ ?>
            <li class="nav-item active"><a class="nav-link" href="../doctor/search.php">Search Report <span class="sr-only">(current)</span></a></li>
        <?php } ?>


        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item active">
                <a class="nav-link" href="../login/logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
