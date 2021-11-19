<div class="loginContent">    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-8 offset-md-2">          
                <div class="shadow-lg p-4 m-4 bg-white rounded">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-lg-6 loginLeft">
                            <img src="../images/lala2.jpg"class="img-fluid" alt="Register">    
                        </div>
                
                        <div class="col-md-12 col-lg-6 loginRight">
                            <div class="loginHeader">
                                <h3>Send Reset Password Link</h3>
                                <p class="text-muted text-center m-2">Enter your email to get a password reset link</p>
                                <hr>
                            </div>

                            <?php 
                                if(!empty($errorMsg)){ 
                                    echo'<div class ="alert alert-danger"> '.$errorMsg.' </div>';
                                }
                            ?>

                            <form method="POST" action="resetPassEmail" enctype="multipart/form-data">
                            
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" required>
                                </div>
                            
                                <button class="btn btn-primary btn-block registerBtn" name="send_btn" type="submit">Send</button>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>