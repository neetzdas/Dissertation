<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require_once "../vendor/autoload.php";
	
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
		            'c_id' => $_POST['c_id'],
		            'sc_no' => $_POST['sc_no'],
		            'e_consumer_id' => $_POST['e_consumer_id'],
		            'm_id' => $_POST['m_id'],
		            'dw_consumer_id' => $_POST['dw_consumer_id'],
		            'digit' => $digit
		    ];
		    if($customerTbl->funcSave($customerCriteria)){
				$mail = new PHPMailer(true); 
				$mail->isSMTP();                              
				$mail->Host = "smtp.gmail.com";
				$mail->SMTPAuth = true;             
				$mail->Username = "osttinel@gmail.com";                 
				$mail->Password = "osttinel@123";       
				$mail->SMTPSecure = "ssl";      
				$mail->Port = 465;                                   
				$mail->From = "osttinel@gmail.com";
				$mail->FromName = "BillPay";
				$mail->addAddress($_POST['email'], $_POST['fullName']);
				$mail->isHTML(true);
				$mail->Subject = "Email Verification";
				$mail->Body = 
				"<html>
					<body style ='text-align:center; font-family: Comic Sans, cursive;'><h2 style='color: #243A53;'>Welcome to BillPay family! <br> We just wanted to make sure we have your right email!</h2>
						<a href='http://localhost/dissertation/public/public_html/emailVerification?digit=$digit'>
							<button style='padding: 15px; background-color: #28A745; color: white; border: 1px solid #28A745; border-radius: 20px;'>Confirm email</button>
						</a>
					</body>
				</html>";
			try {
			    $mail->send();
			} catch (Exception $e) {
			    echo "Mailer Error: " . $mail->ErrorInfo;
			}		
			 $errorMsg = "Thank you for registering with us!<br> We have just sent the verification link to <strong>" .$_POST['email']." </strong>. <br> Please check your inbox and verify the email address to login!";
			}
		}
	}

	$varsCriteria =[
		'customerTbl'=>$customerTbl,
		'counterTbl'=>$counterTbl,
		'merchantTbl'=>$merchantTbl,
		'errorMsg' => $errorMsg
	];
	
$pageContents = loadsTemplate("../views/frontend/registrationForm.php", $varsCriteria);
?>