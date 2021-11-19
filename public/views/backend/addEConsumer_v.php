<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col">
                <h1>Add New Electricity Consumer</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card card-primary">
                    <form action="addEConsumer" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" id="fullName" name="fullName" class="form-control" required = "" >
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" required = "" >
                            </div>

                            <div class="form-group">
                                <label>Contact Number</label>
                                <input id="contactNum" type="text" class="form-control" name="contactNum" required>
                            </div>

                            <div class="form-group">
                                <label>Counter Name</label>
                                <select id = "c_id" name="c_id" class="form-control floating select2" required="">
                                    <option value="" selected disabled style="display:none">Select counter</option>
                                    <?php
                                        $counterStmt = $counterTbl->funcAllSelect();
                                        foreach($counterStmt as $counterRow)
                                            echo '<option value="'.$counterRow['c_id'].'">'.$counterRow['name'].'</option>';
                                    ?>
                                </select>
                                
                                <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                                <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
                                <script>
                                    $('.select2').select2();
                                </script>
                            </div>

                            <div class="form-group">
                                <label>SC No.</label>
                                <input id="sc_no" type="text"  class="form-control" name="sc_no" required>
                            </div>

                            <div class="form-group">
                                <label>Consumer Id</label>
                                <input id="consumer_id" type="number"  class="form-control" name="consumer_id"  required >
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit" name="save_btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> 