<?php 

	$pageTitle = "BillPay - Change Password";

	if(isset($_POST['save_btn'])){ 
		$pass = [
			'admin_id' => $_POST['admin_id'],
			'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
		];
		          
		$adminTbl->funcSave($pass, 'admin_id'); 
		echo '<script>
				alert("Password Changed! To see the change, please log out and login");
				document.location = "adminHome";
					</script>';
	}

	$varsCriteria = [
        'adminTbl'=>$adminTbl
    ];

	$pageContents = loadsTemplate("../../views/backend/changePassword_v.php", $varsCriteria);
?>