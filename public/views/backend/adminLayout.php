<?php
  if (isset($_SESSION['signedIn1']) && $_SESSION['signedIn1'] == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $pageTitle;?></title>

  <?php include "../../includes/bdStyleLinks.php"; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand" style="background-color:rgba(12, 37, 64, 0.9)">
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a class="nav-link" style="color: white;" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i>
          </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a style="color: white;" href="../homePage" class="nav-link">Home</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="mr-4 pt-2" style="color:white;"><?php echo date("l, jS F Y"); ?></li>
        <li class="nav-item">
          <button class="btn btn-light">  
            <a style="color: black;" href="../backend/logout">LOG OUT</a>
          </button>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:rgba(12, 37, 64, 0.9)">
      <a class="navbar-brand ml-5 py-2">
        <img src="../../images/logo.png" height="40" alt="billPay">
      </a>

      <div class="sidebar">
        <div class="user-panel text-center m-2 ">
          <div class="info">
            <a href="#" class="d-block"><?php echo 'Welcome '.$_SESSION['fullName']; ?></a>
          </div>
        </div>
        
        <nav class="mt-0">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="adminHome" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>
          
            <?php 
              if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Electricity')){
                echo '<li class="nav-item">
                        <a href="managingCounter" class="nav-link">
                          <i class="nav-icon fas fa-cash-register"></i>
                          <p>Manage Counters</p>
                        </a>
                      </li>';
              }
            ?>

            <?php 
              if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Drinking water')){
                echo '<li class="nav-item">
                        <a href="managingMerchant" class="nav-link">
                          <i class="nav-icon fa fa-industry"></i>
                          <p>Manage Merchants</p>
                        </a>
                      </li>';
              }
            ?>
            <li class="nav-item">
              <a class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Manage Customers<i class="right fas fa-angle-left"></i></p>
              </a>
              
              <ul class="nav nav-treeview">
                <?php 
                  if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Electricity')){
                    echo '<li class="nav-item">
                            <a href="listOfEConsumers" class="nav-link">
                              <i class="fas fa-lightbulb nav-icon"></i>
                              <p>Electricity</p>
                            </a>
                          </li>';
                  }
                ?>

                <?php 
                  if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Drinking water')){
                    echo '<li class="nav-item">
                            <a href="listOfDwConsumers" class="nav-link">
                              <i class="fas fa-glass-whiskey nav-icon"></i>
                              <p>Drinking Water</p>
                            </a>
                          </li>';
                  }
                ?>
                <li class="nav-item">
                  <a href="dwCustomersList" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Registered Users<i class="right fas fa-angle-left"></i></p>
                  </a>
                  
                  <ul class="nav nav-treeview">
                    <?php 
                      if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Electricity')){
                        echo '<li class="nav-item">
                                <a href="eCustomersList" class="nav-link">
                                  <i class="fas fa-lightbulb nav-icon"></i>
                                  <p>Electricity</p>
                                </a>
                              </li>';
                      }
                    ?>

                    <?php 
                      if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Drinking water')){
                        echo '<li class="nav-item">
                                <a href="dwCustomersList" class="nav-link">
                                  <i class="fas fa-glass-whiskey nav-icon"></i>
                                  <p>Drinking Water</p>
                                </a>
                              </li>';
                      }
                    ?>
                  </ul>
                </li>
              </ul>
            </li>
  
            <li class="nav-item">
              <a class="nav-link">
                <i class="nav-icon fas fa-file-invoice"></i>
                <p>Manage Bills<i class="right fas fa-angle-left"></i></p>
              </a>
              
              <ul class="nav nav-treeview">
                <?php 
                  if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Electricity')){
                    echo '<li class="nav-item">
                             <a href="listOfEBill" class="nav-link">
                              <i class="fas fa-lightbulb nav-icon"></i>
                              <p>Electricity</p>
                            </a>
                          </li>';
                  }
                ?>

                <?php 
                  if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Drinking water')){
                    echo '<li class="nav-item">
                            <a href="listOfDwBill" class="nav-link">
                              <i class="fas fa-glass-whiskey nav-icon"></i>
                              <p>Drinking Water</p>
                            </a>
                          </li>';
                  }
                ?>
              </ul>
            </li>
          
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-receipt"></i>
                <p>Manage Payments<i class="right fas fa-angle-left"></i></p>
              </a>
              
              <ul class="nav nav-treeview">
                <?php 
                  if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Electricity')){
                    echo '<li class="nav-item">
                            <a href="listOfEpay" class="nav-link">
                              <i class="fas fa-lightbulb nav-icon"></i>
                              <p>Electricity</p>
                            </a>
                          </li>';
                  }
                ?>

                <?php 
                  if(($_SESSION['adminType'] == 'Super') || ($_SESSION['adminType'] == 'Drinking water')){
                    echo '<li class="nav-item">
                            <a href="listOfDwPay" class="nav-link">
                              <i class="fas fa-glass-whiskey nav-icon"></i>
                              <p>Drinking Water</p>
                            </a>
                          </li>';
                  }
                ?>
              </ul>
            </li>
          
            <?php 
              if($_SESSION['adminType'] == 'Super'){
                echo '<li class="nav-item">
                        <a href="listOfAdmin" class="nav-link">
                          <i class="nav-icon fa fa-user-circle"></i>
                          <p>Manage Admin</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="listOfEnquiries" class="nav-link">
                          <i class="nav-icon fa fa-comment"></i>
                          <p>Enquiry</p>
                        </a>
                      </li>';
              }
            ?>
            <li class="nav-item">
              <a href="changePassword&updateId=<?php echo $_SESSION['admin_id']?>" class="nav-link">
                <i class="nav-icon fa fa-key"></i>
                <p>Change Password</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="content-wrapper">
      <?php 
        echo $pageContents; 
      ?>
    </div>
  </div>

  <footer class="main-footer text-center">
    <strong>Copyright &copy;Bill Pay <script>document.write(new Date().getFullYear());</script>.</strong>All rights reserved.
  </footer>

  <?php include "../../includes/bdScriptLinks.php"; ?>
</body>
</html>

<?php 
  } 
  else{
?>
<head>
  <?php include "../../includes/styleLinks.php"; ?>
</head>
<body>
  <div class="wrapper">
    <main>
      <div class="loginContent">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 offset-md-2">      
              <div class="shadow-lg p-3 mb-3 bg-white rounded">
                <div class="row justify-content-center">
                  <div class="col-md-7 col-lg-6 loginLeft">
                    <img src="../../images/lala.jpg" class="img-fluid" alt="Login">
                  </div>

                  <div class="col-md-12 col-lg-6 loginRight">
                    <div class="loginHeader">
                      <h3>Login to your account</h3>
                      <hr>
                    </div>
                    <form method="POST" action="adminHome">
                      <div class="form-group">
                        <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="" required>
                      </div>

                      <div class="form-group">
                        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                      </div>

                      <div class = "text-right forgotPw">
                        <a href="">Forgot Password?</a>
                      </div>

                      <button class="btn btn-primary btn-block" type="submit" name="btnLogin2">Login</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <?php include "../../includes/scriptLinks.php"; ?>
</body>
<?php 
  } 
?>