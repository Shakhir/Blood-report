<?php
include '../common/header.php';
include '../common/menu.php';
?>

        <br/>
        <br/>
        <div class="w3-container ">
            <div id="form-container">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <h1>Blood Glucose Level</h1>
                    </div>
                </div>
                <form action="store_glucose.php" method="post">
                    <div class="form-group row">
                        <label for="p_id" class="col-sm-2 col-form-label">Patient ID</label>
                        <div class="col-sm-10">
                            <input type="text" name="p_id" class="form-control" id="p_id" placeholder="Enter Patient ID"
                                   required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fasting" class="col-sm-2 col-form-label">Glucose Fasting</label>
                        <div class="col-sm-10">
                            <input id="fasting" class="form-control" type="number" placeholder="Glucose Fasting"
                                   name="fasting" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="after_breakfast" class="col-sm-2 col-form-label">Glucose After Breakfast</label>
                        <div class="col-sm-10">
                            <input id="after_breakfast" class="form-control" type="number"
                                   placeholder="Glucose After Breakfast" name="after_breakfast" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input id="date" class="form-control" type="date" placeholder="date" name="date" required>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="date" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10 ">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


<?php include '../common/footer.php'; ?>