<?php 
	$pageTitle = "BillPay - Change Profile Picture";

	if (isset($_POST['save_btn'])) { 
		$targetedDirectory = "../../images/"; 
       	$fileName = $_FILES['image']['tmp_name']; 
       	$targetedImageFile = $targetedDirectory.basename($_FILES['image']['name']); 
	
		$pass = [
				 'customer_id' => $_POST['customer_id'],
				 'image' => $_FILES['image']['name']
		        ];
		$customerTbl->funcSave($pass, 'customer_id'); 
		echo '<script>
				alert("Picture Changed. To see the change, please log out and login!");
				document.location = "customerHome";
			  </script>';
	}

	$varsCriteria = [
        'customerTbl'=> $customerTbl
    ];

	$pageContents = loadsTemplate("../../views/customer/changePic.php", $varsCriteria);
?>