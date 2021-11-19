<?php 

	$pageTitle = "BillPay - Add Admin";
	
	if(isset($_POST['save_btn'])){ 
		$valid_admin = $adminTbl->funcValidation('email',$_POST['email']); 
		$row = $valid_admin->fetch();

		if($row['row'] > 0 ){
			echo '<script>alert("The email already exists!");
					document.location = "addingAdmin";
				  </script>';
		}
		else{
			$dataOfAdmin = [
				'fullName' => $_POST['fullName'],
				'type'     => $_POST['type'],
				'contact_num' => $_POST['contact_num'],
				'email' => $_POST['email'],
				'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
			];

			$adminTbl->funcSave($dataOfAdmin); 
			echo '<script>alert("New Admin added!");
					document.location = "listOfAdmin";
				  </script>';
		}
	}

 
	if(isset($_GET['removeId'])){
		$adminRemoveStmt= $adminTbl->funcDelete('admin_id', $_GET['removeId']);
		echo "<script>alert('Admin Sucessfully Deleted!');
		window.location.href='listOfAdmin';</script>";
	}


	$varsCriteria = [
        'adminTbl'=>$adminTbl
    ];

	$pageContents = loadsTemplate("../../views/backend/addingAdmin_v.php", $varsCriteria);
 ?>