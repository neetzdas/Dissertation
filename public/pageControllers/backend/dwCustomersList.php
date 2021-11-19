<?php
	
	$pageTitle = "BillPay - List of Drinking Customers";

	$dwCustomers_records=$customerTbl->funcAllSelect();
	$recordsOfdwCustomers=$dwCustomers_records->fetchAll();

	$listdwCustomers=$merchantTbl->funcAllSelect();
	$merchants=$listdwCustomers->fetchAll();

	if(isset($_GET['removeId'])){
		$removeDwCustomersStmt = $customerTbl->funcDelete('customer_id', $_GET['removeId']); 
		echo "<script>alert('Drinking  Water Customer Successfuly Deleted!');
			window.location.href='dwCustomersList';</script>";
	}


	$varsCriteria = [
        'recordsOfdwCustomers'=>$recordsOfdwCustomers,
        'merchants' => $merchants
    ];

	$pageContents = loadsTemplate("../../views/backend/listOfDwCustomers_v.php", $varsCriteria);
?>