<?php

	$pageTitle = "BillPay - List of Driking Water Payments";

	$dwPayRecords = $pdo->prepare("SELECT * FROM tb_dwpayments dp
								JOIN tb_dwbills db
								ON dp.dwBill_id = db.dwBill_id
								JOIN tb_dwconsumers dc
								ON db.dconsumer_id = dc.dconsumer_id
								JOIN tb_customers c
								ON dp.paidBy= c.customer_id
								ORDER BY dp.dp_id DESC");
	$dwPayRecords->execute();

	$listDwConsumers=$dwConsumerTbl->funcAllSelect();
	$dwConsumers=$listDwConsumers->fetchAll();

	$varsCriteria = [
		'dwPayRecords' => $dwPayRecords,
		'dwConsumers' => $dwConsumers
		
    ];

$pageContents = loadsTemplate("../../views/backend/listOfDwPay_v.php", $varsCriteria);

?>