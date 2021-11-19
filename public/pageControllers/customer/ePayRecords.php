<?php
$pageTitle = "BillPay - Payment Records"; 

$payingCus = $_SESSION['customerId'];

$ePayRecords = $pdo->query("SELECT *  
								FROM tb_epayments ep
								JOIN tb_ebills eb
								ON eb.eBill_id = ep.eBill_id 
								JOIN tb_econsumers ec
								ON ec.econsumer_id = eb.econsumer_id
								JOIN tb_counters c
								ON c.c_id = ec.c_id
								WHERE ep.paidBy = '$payingCus'
								ORDER BY ep.ep_id DESC ");
	$ePayRecords->execute();

	$listECustomers=$counterTbl->funcAllSelect();
	$counters=$listECustomers->fetchAll();

	$listCustomers=$customerTbl->funcAllSelect();
	$customers=$listCustomers->fetchAll();

	$varsCriteria = [
        'ePayRecords' => $ePayRecords,
        'counters'=> $counters,
        'customers'=> $customers 
    ];
	
	$pageContents = loadsTemplate('../../views/customer/ePayRecords_view.php',$varsCriteria);
?>