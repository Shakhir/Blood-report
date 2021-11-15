
<?php
include '../common/header.php';
include '../common/menu.php';
?>
    <h1>Hello, <?php echo $_SESSION['id']; ?></h1>
    <h1>Role: <?php echo $_SESSION['role']; ?></h1>
    <h1>Name: <?php echo $_SESSION['firstName']; ?></h1>
<?php
include '../common/footer.php';
