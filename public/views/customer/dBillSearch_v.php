<div class="loginContent">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">      
                <div class="shadow-lg p-3 mb-3 bg-white rounded">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-6 loginRight">
                            <div class="loginHeader">
                                <p>Please enter the month and your consumer id</p>
                                <hr>
                            </div>
                            <?php if(!empty($_SESSION['error'])){ 
                            echo'<div class ="alert alert-danger"> '.$_SESSION['error'].' 
                                </div>';
                                $_SESSION['error']=null;
                            }?>
                            <form action="dAllBill" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Date From</label>
                                    <input type="date" id="date_from" name="date_from" class="form-control" required = "">
                                </div>

                                <div class="form-group">
                                    <label>Date To</label>
                                    <input type="date" id="date_to" name="date_to" class="form-control" required = "">
                                </div>

                                <div class="form-group">
                                    <label>Drinking Water Consumer Id</label>
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