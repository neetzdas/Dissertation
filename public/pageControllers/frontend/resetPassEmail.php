<?php
	$pageTitle = "BillPay - Password Reset Link"; 

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require_once "../vendor/autoload.php";

	$errorMsg = array();

	if(isset($_POST['send_btn'])){
		$enteredEmail = $_POST['email'];
		$validDigit = $pdo->query("SELECT digit FROM tb_customers WHERE email = '$enteredEmail' LIMIT 1")->fetch();
		$cusName = $pdo->query("SELECT fullName FROM tb_customers WHERE email = '$enteredEmail' LIMIT 1")->fetch();

		$vaildEmail = $customerTbl->funcValidation('email',$enteredEmail);
		$row = $vaildEmail->fetch();

		if($row['row'] > 0){
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

				$mail->addAddress($enteredEmail, $cusName[0]);

				$mail->isHTML(true);

				$mail->Subject = "Password Reset Link";
				$mail->Body = "<html>
							   <body style ='text-align:center; font-family: Comic Sans, cursive;'><h2 style='color: #243A53;'>Hello!! Please click the below button to have access to reset your password.</h2>
								   <a href='http://localhost/dissertation/public/public_html/forgotPassword?digit=$validDigit[0]'>
								   		<button style='padding: 15px; background-color: #28A745; color: white; border: 1px solid #28A745; border-radius: 20px;'>Reset Password</button>
								   </a>
							   </body>
							   </html>";
			try {
			    $mail->send();
			} catch (Exception $e) {
			    echo "Mailer Error: " . $mail->ErrorInfo;
			}		
			 $errorMsg = "We have just sent the password reset link to <strong>" .$enteredEmail." </strong>. <br> Please check your inbox!";
			
		}
		else{
			$errorMsg = "The email you entered is not registered in our system. Please check and try again!!";
		    
		}
	}

	$varsCriteria =[
		'customerTbl'=>$customerTbl,
		'errorMsg' => $errorMsg
	];

	$pageContents = loadsTemplate('../views/frontend/resetPassEmail_v.php',$varsCriteria);
?>
	
