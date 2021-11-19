<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $pageTitle;?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php include "../includes/fdStyleLinks.php"; ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg">
                <a href="homePage" class="navbar-brand">
                    <img src="../images/logo.png" height="50" alt="billPay">
                </a>

                <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#links"
                aria-controls="links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="links">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="homePage"><i class="fa fa-home"></i>HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutUs"><i class="fa fa-users"></i>ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customerLogin"><i class="fas fa-file-invoice"></i>PAY YOUR BILLS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactUs"><i class="fa fa-phone"></i>CONTACT US</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <button class="loginbtn">
                                <a href="customerLogin">LOGIN</a>
                                <span class="clearfix d-none d-sm-inline-block"><a href="registerUsers"> | REGISTER</a></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="sidebar">
                <div class="dismiss">
                    <i class="fas fa-arrow-left"></i>
                </div>
            </nav>
            <div class="overlay"></div>
        </header>
        <main>
            <?php echo $pageContents;?>
        </main>
    </div>

    <?php 
        include '../includes/footer.php';
        include "../includes/fdScriptLinks.php"; 
    ?>
</body>
</html>