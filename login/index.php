<!DOCTYPE html>
<html>
<head>
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>

<div id="login_area">

    <form action="connect.php" method="post">
        <div class="imgcontainer">
            <img src="../assets/img/img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label><b>Email</b></label>
            <input type="text" placeholder="Enter email" name="email" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <!--<input type="checkbox" checked="checked"> Remember me-->
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <a href="../sign_up/index.php"><button type="button" class="cancelbtn">Sign up</button></a>
            <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
        </div>
    </form>

</div>

</body>
</html>