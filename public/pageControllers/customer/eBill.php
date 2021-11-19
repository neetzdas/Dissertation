<?php
	
	$pageTitle = "BillPay - Your Unpaid Electricity Bills";

	$errorMsg = null;

	if(isset($_POST['btnSubmit'])){
		$myId = $_POST['consumer_id'];
		$sc = $_POST['sc_no'];
		$myCounter = $_POST['c_id'];

		$connect = $pdo->query("SELECT * FROM tb_econsumers WHERE 
								consumer_id ='$myId' AND 
								c_id ='$myCounter' AND 
								sc_no = '$sc' LIMIT 1");

		$econsumerId = $connect->fetch();

		if(empty($econsumerId)){
			$errorMsg ="Consumer not found! Please enter correct values!";
		}

		$connect2 = $pdo->query("SELECT * FROM tb_ebills WHERE 
								econsumer_id ='$econsumerId[0]' AND 
								status ='0'");
		
		$eBillRecords = [];

		while($row = $connect2->fetch()){
			$eBillRecords[] = $row;
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
    	header('location:eSearch');
    }
    else{
    	$pageContents = loadsTemplate('../../views/customer/eBill_view.php', $varsCriteria);
    }   
?>