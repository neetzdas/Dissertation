<?php

	$pageTitle = "BillPay - Logout Process";

	$errorMsg = array();

	session_unset(); 
	session_destroy();

	$errorMsg = "You are logged out!";

	$varsCriteria = [
        'errorMsg'=> $errorMsg
    ];

    $pageContents = loadsTemplate("../views/customer/customerLayout.php", $varsCriteria);
?>