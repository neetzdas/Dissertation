<div class="loginContent">    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-8 offset-md-2">          
                <div class="shadow-lg p-3 mb-3 bg-white rounded">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-lg-6 text-center"></div>
                        <div class="col-md-12 col-lg-6 loginRight">
                            <div class="loginHeader">
                                <h3>ENQUIRY FORM</h3>
                                <hr>
                            </div>

                            <?php 
                                if(!empty($errorMsg)){ 
                                    echo'<div class ="alert alert-danger"> '.$errorMsg.' </div>';
                                }
                            ?>

                            <form method="POST" action="contactUs" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input id="fullName" type="text" placeholder="Full Name" class="form-control" name="fullName"  value="" required>
                                </div>
                            
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="" required>
                                </div>
                            
                                <div class="form-group">
                                    
                                    <input id="contactNum" type="text" placeholder="Contact Number" class="form-control" name="contactNum" required>
                    
                                </div>

                                <div class="form-group">
                                    <textarea name="description" id="description" cols="30" rows="7" class="form-control" placeholder="Message" required="" ></textarea>
                                </div>

                                <button class="btn btn-primary btn-block registerBtn" name="submit_btn" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>