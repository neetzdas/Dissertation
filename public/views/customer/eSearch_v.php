<div class="loginContent">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">      
                <div class="shadow-lg p-3 mb-3 bg-white rounded">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-6 loginRight">
                            <div class="loginHeader">
                                <p>Please enter the counter name and your consumer id for further process</p>
                                <hr>
                            </div>
                            
                            <?php if(!empty($_SESSION['error'])){ 
                            echo'<div class ="alert alert-danger"> '.$_SESSION['error'].' 
                                </div>';
                                $_SESSION['error']=null;
                            }?>
                            
                            <form action="eBill" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Counter Name</label>
                                    <select id = "c_id" name="c_id" class="form-control  select2" required = "">
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
                                    <input type="text" id="sc_no" name="sc_no" class="form-control" required = "" >
                                </div>

                                <div class="form-group">
                                    <label>Electricity Consumer Id</label>
                                    <input type="number" id="consumer_id" name="consumer_id" class="form-control" required = "" >
                                </div>

                                <button class="btn btn-primary btn-block loginBtn" type="submit" name="btnSubmit">Find</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>