<?php
	$pageTitle = "BillPay - Payment Records"; 

	$payingCus = $_SESSION['customerId'];
	
	$dwPayRecords = $pdo->query("SELECT *  
								FROM tb_dwpayments dp
								JOIN tb_dwbills db
								ON db.dwBill_id = dp.dwBill_id 
								JOIN tb_dwconsumers dc
								ON dc.dconsumer_id = db.dconsumer_id
								JOIN tb_merchants m
								ON m.m_id = dc.m_id
								WHERE dp.paidBy = '$payingCus' 
								ORDER BY dp.dp_id DESC ");
	$dwPayRecords->execute();

	$listDwCustomerst=$merchantTbl->funcAllSelect();
	$merchants=$listDwCustomerst->fetchAll();

	$listCustomers=$customerTbl->funcAllSelect();
	$customers=$listCustomers->fetchAll();

$varsCriteria = [
        'dwPayRecords' => $dwPayRecords,
        'merchants'=> $merchants,
        'customers'=> $customers
       
    ];
$pageContents = loadsTemplate('../../views/customer/dwPayRecords_view.php',$varsCriteria);
?>