<?php 

	$pageTitle = "BillPay - Email Verification";

	$errorMsg = array();

	if(isset($_GET['digit'])){
 		$myDigit = $_GET['digit'];

 		$emailStmt = $pdo->query("UPDATE tb_customers SET verification_num = 1 WHERE digit = '$myDigit'");
		$emailStmt->execute();

		$errorMsg = "Your email is now verified!<br> Please login with your registered credentials.";
	}

	$varsCriteria = [
		'errorMsg' => $errorMsg
	];

	$pageContents = loadsTemplate("../views/customer/customerLayout.php", $varsCriteria);
?>