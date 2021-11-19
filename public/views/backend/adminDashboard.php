<div class="container-fluid">
  <div class="row">
    <div class="col">
      <h3 class="mt-2 text-center">Dashboard</h3>
    </div>
  </div>
</div>

<section class="content py-3">
  <div class="container-fluid">
    <?php 
      if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Electricity')){
        echo '<div class="row">
                <div class="col-4">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>'.$totalECustomers['totalREc'].'</h3>
                      <p>Registered Electricity Customers</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                </div>

                <div class="col-4">
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>'.$totalEConsumers['totalEc'].'</h3>
                      <p>Electricity Consumers</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-lightbulb"></i>
                    </div>
                  </div>
                </div>

                <div class="col-4">
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>'.$ePayGross['totalEAmt'].'</h3></h3>
                      <p>Electricity Payment Gross</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-dollar-sign"></i>
                    </div>
                  </div>
                </div>
              </div>';
      }
    ?>

    <?php 
      if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Drinking water')){
        echo '<div class="row">
                <div class="col-4">
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>'.$totalDwCustomers['totalRDwc'].'</h3>
                      <p>Registered Drinking Water Customers</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                </div>

                <div class="col-4">
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>'.$totalDwConsumers['totalDwc'].'</h3>
                      <p>Drinking Water Consumers</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-glass-whiskey"></i>
                    </div>
                  </div>
                </div>

                <div class="col-4">
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>'.$dwPayGross['totalDAmt'].'</h3>
                      <p>Drinking Water Payment Gross</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-dollar-sign"></i>
                    </div>
                  </div>
                </div>
              </div>';
      }
    ?>
  </div>
</section>