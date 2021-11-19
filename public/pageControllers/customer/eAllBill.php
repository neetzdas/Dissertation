<?php
	$pageTitle = "BillPay - Your Searched Bills"; 

	$errorMsg = null;

	if(isset($_POST['btnSubmit'])){
		$myId = $_POST['consumer_id'];
		$myDate1 = $_POST['date_from'];	
		$myDate2 = $_POST['date_to'];	

		$connect = $pdo->query("SELECT * from tb_econsumers Where 
								consumer_id ='$myId' LIMIT 1");

		$econsumerId = $connect->fetch();

		if(empty($econsumerId)){
			$errorMsg ="Consumer not found! Please enter the correct consumer id!";
		}
		else{
			$connect2 = $pdo->query("SELECT * from tb_ebills Where 
									reading_date >='$myDate1' AND 
									reading_date <='$myDate2' AND 
									econsumer_id ='$econsumerId[0]'");
			$eBillRecords = [];

			while($row = $connect2->fetch()){
				$eBillRecords[] = $row;
			}
		}	
	}	

		$varsCriteria = [
			'eBillRecords' => $eBillRecords,
			'consumer_id'=>$econsumerId['consumer_id'],
			'sc_no'=>$econsumerId['sc_no'],
			'errorMsg' => $errorMsg
		];

		if($errorMsg != null){
	    	$_SESSION['error'] = $errorMsg;
	    	header('location:eBillSearch');
   		}
    	else{
    		$pageContents = loadsTemplate('../../views/customer/eAllBill_v.php',$varsCriteria);
    	}
?>