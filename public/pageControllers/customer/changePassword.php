<?php 

	$pageTitle = "BillPay - Change Password";

	if(isset($_POST['save_btn'])){ 
		$pass = [
			'customer_id' => $_POST['customer_id'],
			'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
		];
		          
		$customerTbl->funcSave($pass, 'customer_id'); 
		echo '<script>
				alert("Password Changed. To see the change, please log out and login!");
				document.location = "customerHome";
			  </script>';
	}

	$varsCriteria = [
		'customerTbl'=>$customerTbl
    ];

	$pageContents = loadsTemplate("../../views/customer/changePassword_v.php", $varsCriteria);
?>