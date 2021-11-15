
<?php include '../common/header.php';?>
<?php include '../common/menu.php';?>
        <div class="w3-container ">
            <div id="form-container">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <h1>Search Report</h1>
                    </div>
                </div>
                <form action="search_result.php" method="post">
                    <div class="form-group row">
                        <label for="p_id" class="col-sm-2 col-form-label">Patient ID</label>
                        <div class="col-sm-10">
                            <input type="text" name="p_id" class="form-control" id="p_id" placeholder="Enter Patient ID"
                                   required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fasting" class="col-sm-2 col-form-label">Report Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputGroupSelect02" name="report_type" required>
                                <option selected value="">Choose...</option>
                                <option value="glucose">Glucose</option>
                                <option value="ferritin">Ferritin</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label for="date" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10 ">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
<?php include '../common/footer.php';?>