<?php
	$pageTitle = "BillPay - Forgot Password"; 

	if(isset($_POST['reset_btn'])){
		$myEmailDigit = $_POST['digit'];

		$passReset = password_hash($_POST['password'], PASSWORD_DEFAULT);

		$resetPassStmt = $pdo->query("UPDATE tb_customers SET password = '$passReset' WHERE digit = '$myEmailDigit'");
		$resetPassStmt->execute();

		echo '<script>
				alert("Your password has been reset!");
					document.location = "customerLogin";
			  </script>';
		
	}

	$varsCriteria =[
		'customerTbl'=>$customerTbl
	];

	$pageContents = loadsTemplate('../views/frontend/forgotPassword_v.php',$varsCriteria);
?>
	
