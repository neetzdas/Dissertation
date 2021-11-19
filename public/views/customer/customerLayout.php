<?php 
    if (isset($_SESSION['signedIn']) && $_SESSION['signedIn'] == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $pageTitle;?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php include "../../includes/styleLinks.php"; ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg">
                <a href="../homePage" class="navbar-brand">
                    <img src="../../images/logo.png" height="50" alt="billPay">
                </a>

                <div class="collapse navbar-collapse"></div>
                <div>
                    <ul class="navbar-nav ml-auto">
                        <li class="mr-4 pt-2" style="color:white;"><?php echo date("l, jS F Y"); ?></li>
                        <li class="nav-item">
                            <button class="loginbtn">  
                                <a href="../logout">LOG OUT</a>
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-sm-6 ">
                    <ul class="navbar-nav sidemenu px-4 py-1">
                        <li class="nav-item text-center pt-4">
                            <div class="profileContent">
                                <a class="userImg">
                                    <?php echo'<img src="../../images/'.$_SESSION['image'].'" alt="User Image">';?> 
                                </a>
                                <div>
                                    <a class="btn btn-info mb-3" href="changePic&updateId=<?php echo $_SESSION['customerId']?>">Change Picture</a>
                                </div>
                                <div>
                                    <?php
                                        echo '<h5>'.$_SESSION['name'].'</h5>';
                                        echo '<p class="mb-1">'.$_SESSION['contact_num'].'</p>';
                                        echo '<p class="mb-1">'.$_SESSION['email'].'</p>';
                                        if(($_SESSION['userType']) == 'Both' || ($_SESSION['userType']) == 'Electricity'){
                                            echo '<p class="mb-1" style="font-weight:bold;">Electricity Consumer Id: '.$_SESSION['eConsumerId'].'</p>
                                                <p class="mb-1" style="font-weight:bold;">SC No.: '.$_SESSION['sc_no'].'</p>';
                                        }

                                        if(($_SESSION['userType']) == 'Both' || ($_SESSION['userType']) == 'Drinking Water'){
                                            echo '<p class="mb-1" style="font-weight:bold;">Drinking Water Consumer Id:  '.$_SESSION['dwConsumerId'].'</p>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <hr>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="customerHome"><i class="fa fa-home"></i>Dashboard</a>
                        </li>
                        
                        <li class="nav-item px-1 py-2">
                            <i class="fas fa-file-invoice"></i>My Bills<span class="caretSign"></span>
                            <ul class="treeView">
                                <?php if (($_SESSION['userType']) == 'Both' || ($_SESSION['userType']) == 'Electricity'){ echo
                                '<li class="py-1"><a class="nav-link" href="eBillSearch">Electricity</a>
                                </li>';}?>
                                <?php if (($_SESSION['userType']) == 'Both' || ($_SESSION['userType']) == 'Drinking Water'){ echo
                                '<li class="py-1"><a class="nav-link" href="dBillSearch">Drinking Water</a>
                                </li>';}?> 
                                
                            </ul>
                        </li>

                        <li class="nav-item px-1 py-2">
                            <i class="fas fa-receipt"></i>My Payments<span class="caretSign"></span>
                            <ul class="treeView">
                                <?php if (($_SESSION['userType']) == 'Both' || ($_SESSION['userType']) == 'Electricity'){ echo
                                '<li class="py-1"><a class="nav-link" href="ePayRecords">Electricity</a>
                                </li>';}?>
                                <?php if (($_SESSION['userType']) == 'Both' || ($_SESSION['userType']) == 'Drinking Water'){ echo
                                '<li class="py-1"><a class="nav-link" href="dwPayRecords">Drinking Water</a>
                                </li>';}?> 
                            </ul>
                        </li>

                        <script>
                            var dropMenu = document.getElementsByClassName("caretSign");
                            var i;

                            for (i = 0; i < dropMenu.length; i++) {
                                dropMenu[i].addEventListener("click", function() {
                                this.parentElement.querySelector(".treeView").classList.toggle("active");
                                this.classList.toggle("caretSign-down");
                                });
                            }
                        </script>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="changePassword&updateId=<?php echo $_SESSION['customerId']?>"><i class="fas fa-key"></i>Change password</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 col-sm-6">
                    <?php echo $pageContents; ?>
                </div>
            </div>
        </div>
    </div>
    <?php 
    	include "../../includes/footer.php";
    	include "../../includes/scriptLinks.php";
    ?>
</body>
</html>

<?php 
    } 
    else{ 
?>
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
                                        <img src="../images/lala2.jpg" class="img-fluid" alt="Login">
                                    </div>

                                    <div class="col-md-12 col-lg-6 loginRight">
                                        <div class="loginHeader">
                                            <h3>Login to your account</h3>
                                            <hr>
                                        </div>

                                        <?php 
                                            if(!empty($errorMsg)) { 
                                                echo'<div class ="alert alert-danger"> '.$errorMsg.' </div>';}
                                        ?>
                                        <form method="POST" action="customerLogin">
                                            <div class="form-group">
                                                <input id="email" type="email" placeholder="Email-Address" class="form-control" name="email" value="" required autocomplete="email">
                                            </div>

                                            <div class="form-group">
                                                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required autocomplete="new-password">
                                            </div>

                                            <button class="btn btn-primary btn-block loginBtn" type="submit" name="btnLogin">Login</button>

                                            <div class=" text-right forgotPw">
                                                <a href="resetPassEmail">Forgot Password?</a>
                                            </div>
                                   
                                            <div class="text-center noAccount">Don’t have an account? 
                                                <a href="registerUsers">Register</a>
                                            </div>
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
</body>
<?php
    }
?>