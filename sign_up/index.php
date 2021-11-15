<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h1>Registration Form</h1>
            </div>
            <div class="panel-body">
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input
                                type="text"
                                class="form-control"
                                id="firstName"
                                name="firstName"
                        />
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input
                                type="text"
                                class="form-control"
                                id="lastName"
                                name="lastName"
                        />
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <div>
                            <label for="doctor" class="radio-inline"
                            ><input
                                        type="radio"
                                        name="role"
                                        value="d"
                                        id="doctor"
                                />Doctor</label
                            >
                            <label for="patient" class="radio-inline"
                            ><input
                                        type="radio"
                                        name="role"
                                        value="p"
                                        id="patient"
                                />Patient</label
                            >
                            <label for="nurse" class="radio-inline"
                            ><input
                                        type="radio"
                                        name="role"
                                        value="n"
                                        id="nurse"
                                />Nurse</label
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                        />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                        />
                    </div>
                    <div class="form-group">
                        <label for="number">Phone Number</label>
                        <input
                                type="number"
                                class="form-control"
                                id="number"
                                name="number"
                        />
                    </div>
                    <input type="submit" class="btn btn-primary" />
                </form>
            </div>
            <div class="panel-footer text-right">

            </div>
        </div>
    </div>
</div>

</body>
</html>