<?php

	$pageTitle = "BillPay - Your Upaid Drinking Water Bills"; 

	$errorMsg = null;

	if(isset($_POST['btnSubmit'])){
		$myId = $_POST['consumer_id'];
		$myMerchant = $_POST['m_id'];	

		$connect = $pdo->query("SELECT * from tb_dwconsumers WHERE 
								consumer_id ='$myId' AND 
								m_id ='$myMerchant' LIMIT 1");

		$dwconsumerId = $connect->fetch();

		if(empty($dwconsumerId)){
			$errorMsg ="Consumer not found! Please enter correct values!";
		}
		
		$connect2 = $pdo->query("SELECT * from tb_dwbills WHERE 
								dconsumer_id ='$dwconsumerId[0]' AND 
								status ='0'");
		$dwBillRecords = [];
		
		while($row = $connect2->fetch()){
			$dwBillRecords[] = $row;
		}
	}

	$varsCriteria = [
		'dwBillRecords' => $dwBillRecords,
		'consumer_id'=>$dwconsumerId['consumer_id'],
		'errorMsg' => $errorMsg
	];

	if($errorMsg != null){
    	$_SESSION['error'] = $errorMsg;
    	header('location:dwSearch');
    }
    else{
    	$pageContents = loadsTemplate('../../views/customer/dwBill_view.php',$varsCriteria);
    } 

?>