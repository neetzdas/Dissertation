<?php
	$pageTitle = "BillPay - Contact Us";
	$errorMsg = array();

	if(isset($_POST['submit_btn'])){
		$enquiryCriteria = [
			'fullName'=> $_POST['fullName'],
			'contactNum' => $_POST['contactNum'],
			'email' => $_POST['email'],
			'description' => $_POST['description']
		];
		          
		$enquiryTbl->funcSave($enquiryCriteria);

		$errorMsg = "Thank you for contacting us, we will get back to you soon!";
			   	
	}

	$varsCriteria =[
		'enquiryTbl'=>$enquiryTbl,
		'errorMsg' => $errorMsg
	];


$pageContents = loadsTemplate('../views/frontend/contactUs_v.php',$varsCriteria);
?>