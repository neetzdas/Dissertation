<?php
	$pageTitle = "BillPay - Your Searched Drinking Water Bills";

	$errorMsg = null; 

	if(isset($_POST['btnSubmit'])){
		$myId = $_POST['consumer_id'];
		$myDate1 = $_POST['date_from'];	
		$myDate2 = $_POST['date_to'];	

		$connect = $pdo->query("SELECT * from tb_dwconsumers Where consumer_id ='$myId' LIMIT 1");

		$dconsumerId = $connect->fetch();

		if(empty($dconsumerId)){
			$errorMsg ="Consumer not found! Please enter the correct consumer id!";
		}

		$connect2 = $pdo->query("SELECT * from tb_dwbills Where reading_date >='$myDate1' AND reading_date <='$myDate2' AND dconsumer_id ='$dconsumerId[0]'");
		$dwBillRecords = [];

		while($row = $connect2->fetch()){
			$dwBillRecords[] = $row;
		}
	}	

	$varsCriteria = [
		'dwBillRecords' => $dwBillRecords,
		'consumer_id'=>$dconsumerId['consumer_id']
    ];

    if($errorMsg != null){
	    $_SESSION['error'] = $errorMsg;
	    header('location:dBillSearch');
   	}
    else{
    	$pageContents = loadsTemplate('../../views/customer/dAllBill_v.php',$varsCriteria);
    }
?>