<div class="container">
  <div class="row p-5">
    <div class="col  text-center">  
      <h3>---  WELCOME TO BILLPAY FAMILY! ---</h3>
      <p class="p-2">Please click the below icon/s to pay your pending bills</p>
    </div>
  </div>
</div>
<section class="ftco-section ftco-intro">
  <div class="container">
    <?php 
      if(($_SESSION['userType']) == 'Both' || ($_SESSION['userType']) == 'Electricity'){
        echo '<div class="row">
                <div class="col-3"></div>
                
                  <div class="col-6">
                    <div class="services active text-center" style="background: linear-gradient(to left, #40270c 0%, #09233c 100%);">
                      <a href="eSearch">
                        <div class="media-body">
                          <span><i class="fas fa-lightbulb"></i></span>
                          <h3 class="heading">Electricity</h3>
                        </div>
                      </a>
                    </div>      
                  </div>
      
                  <div class="col-3"></div>
                </div>';
      }
    ?>

    <?php
      if(($_SESSION['userType']) == 'Both' || ($_SESSION['userType']) == 'Drinking Water'){
        echo '<div class="row pt-5 mt-3">
                <div class="col-3"></div>

                <div class="col-6">
                  <div class="services active text-center" style="background: linear-gradient(to right, #40270c 0%, #09233c 100%);">
                    <a href="dwSearch">
                      <div class="media-body">
                        <span><i class="fas fa-glass-whiskey"></i></span>
                        <h3 class="heading">Drinking water</h3>
                      </div>
                    </a>
                  </div>      
                </div>

                <div class="col-3"></div>
              </div>';
      }
    ?>
  </div>    
</section>