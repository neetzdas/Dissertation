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
                                <h3>RESET PASSWORD</h3>
                                <hr>
                            </div>

                            <?php 
            					$cusEmailD = $customerTbl->funcSelect('digit', $_GET['digit'])->fetch(); 
                            ?>

                            <form method="POST" action="forgotPassword" enctype="multipart/form-data">
                      
                                <div class="form-group">
                                	<input type="hidden" name="digit" value="<?php echo $cusEmailD['digit']; ?>" />

                                    <input id="password" type="password" placeholder="Password" class="form-control" name="password" required >                     
                                </div>

                                <div class="form-group">
                                    <input id="confpassword" type="password" placeholder="Confirm Password" class="form-control" name="confpassword" required onkeyup='checkPass();'>  
                                    <span id ="errorMsg"></span>                   
                                </div>
                                <script>
                                	var checkPass = function(){
	  									if(document.getElementById('password').value ==
	    									document.getElementById('confpassword').value){
	    									$('#errorMsg').html('Passwords match!').css('color', 'green');
	    								}
	    								else{
	    									$('#errorMsg').html('Passwords do not match!').css('color', 'red');
	    								}
    								}
                                </script>
                
                                <button class="btn btn-primary btn-block registerBtn" name="reset_btn" type="submit">Reset</button>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



