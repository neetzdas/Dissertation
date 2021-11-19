<?php 
	$pageTitle = "BillPay - Update Admin";

	if(isset($_POST['save_btn'])){ 
		$dataOfAdmin = [
			'admin_id' => $_POST['admin_id'],
			'fullName' => $_POST['fullName'],
			'type' => $_POST['type'],
			'contact_num' => $_POST['contact_num'],
			'email' => $_POST['email']
		];

		$adminTbl->funcSave($dataOfAdmin, 'admin_id'); 
		echo '<script>alert("Admin successfully updated!");
					document.location = "listOfAdmin";
				  </script>';
	}
	
	$varsCriteria = [
        'adminTbl'=>$adminTbl
    ];

	$pageContents = loadsTemplate("../../views/backend/updatingAdmin_v.php", $varsCriteria);
?>