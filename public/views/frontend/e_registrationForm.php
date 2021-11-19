<div class="loginContent">    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-8 offset-md-2">          
                <div class="shadow-lg p-3 mb-3 bg-white rounded">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-lg-6 loginLeft">
                            <img src="../images/lala2.jpg" class="img-fluid" alt="Register">    
                        </div>
                
                        <div class="col-md-12 col-lg-6 loginRight">
                            <div class="loginHeader">
                                <h3>REGISTER</h3>
                                <div class="row">
                                <div class=" col alAccount">
                                    <a href="registerUsers">For Both Electricity and Drinking Water</a>
                                </div>

                                <div class="col  alAccount">
                                    <a href="registerDUsers">Only For Drinking Water</a>
                                </div>
                            </div>
                                <hr>
                            </div>

                            <?php 
                                if(!empty($errorMsg)){ 
                                    echo'<div class ="alert alert-danger"> '.$errorMsg.' </div>';
                                }
                            ?>

                            <form method="POST" action="registerEUsers" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input id="fullName" type="text" placeholder="Full Name" class="form-control" name="fullName" required>
                                </div>
                            
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" required>
                                </div>
                            
                                <div class="form-group">
                                    <input id="contactNum" type="text" placeholder="Contact Number" class="form-control" name="contactNum" required>
                                </div>
                                
								<div class="form-group">
                                    <select id = "type" name="type" class="form-control floating " required="">
                                        <option value="" selected disabled style="display:none">Select the type</option>
                                        <option value="Electricity">Electricity</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <select id = "c_id" name="c_id" class="form-control floating select2" required="">
                                        <option value="" selected disabled style="display:none">Select your counter</option>
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
                                    <input id="sc_no" type="text" placeholder="SC No." class="form-control" name="sc_no" required>
                                </div>

                                <div class="form-group">
                                    <input id="e_consumer_id" type="number" placeholder="Consumer Id" class="form-control" name="e_consumer_id" required>
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>                     
                                </div>
                
                                <button class="btn btn-primary btn-block registerBtn" name="registerBtn" type="submit">Signup</button>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>