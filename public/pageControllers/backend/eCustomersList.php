<?php
	
	$pageTitle = "BillPay - List of Electricity Customers";

	$etCustomers_records=$customerTbl->funcAllSelect();
	$recordsOfEtCustomers=$etCustomers_records->fetchAll();

	$listECustomers=$counterTbl->funcAllSelect();
	$counters=$listECustomers->fetchAll();

	if(isset($_GET['removeId'])){
		$removeECustomersStmt = $customerTbl->funcDelete('customer_id', $_GET['removeId']); 
		echo "<script>alert('Electricity Customer Successfuly Deleted!');
			window.location.href='eCustomersList';</script>";
	}


	$varsCriteria = [
        'recordsOfEtCustomers'=>$recordsOfEtCustomers,
        'counters' => $counters
    ];

	$pageContents = loadsTemplate("../../views/backend/listOfECustomers_v.php", $varsCriteria);
?>