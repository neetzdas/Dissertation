<?php
	
	$pageTitle = "BillPay - Register";

	$errorMsg = array();

	if(isset($_POST['registerBtn'])){
		$vaildEmail = $customerTbl->funcValidation('email',$_POST['email']); 
		$row = $vaildEmail->fetch();

		if($row['row'] > 0){
			$errorMsg = "Email Address already exists!!";
		}
		else{
			$digit = md5(time().$_POST['email']);

			$customerCriteria = [
		            'fullName'=> $_POST['fullName'],
		            'type' => $_POST['type'],
		            'contactNum' => $_POST['contactNum'],
		            'email' => $_POST['email'],
		            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT), 
		            'm_id' => $_POST['m_id'],
		            'dw_consumer_id' => $_POST['dw_consumer_id'],
		            'digit' => $digit
		    ];

		    $customerTbl->funcSave($customerCriteria);
								
			$errorMsg = "Thank you for registering with us!<br> We have just sent the verification link to <strong>" .$_POST['email']." </strong>. <br> Please check your inbox and verify the email address to login!";
			
		}
	}

	$varsCriteria =[
		'customerTbl'=>$customerTbl,
		'merchantTbl'=>$merchantTbl,
		'errorMsg' => $errorMsg
	];
	

	$pageContents = loadsTemplate("../views/frontend/d_registrationForm.php", $varsCriteria);
?>