<?php

	$pageTitle = "BillPay - List of Electricity Payments";

	$ePayRecords = $pdo->prepare("SELECT * FROM tb_epayments ep
								JOIN tb_ebills eb
								ON ep.eBill_id = eb.eBill_id
								JOIN tb_econsumers ec
								ON eb.econsumer_id = ec.econsumer_id
								JOIN tb_customers c
								ON ep.paidBy= c.customer_id
								ORDER BY ep.ep_id DESC");
	$ePayRecords->execute();

	$listEConsumers=$eConsumerTbl->funcAllSelect();
	$eConsumers=$listEConsumers->fetchAll();

	$varsCriteria = [
		'ePayRecords' => $ePayRecords,
		'eConsumers' => $eConsumers
		
    ];

$pageContents = loadsTemplate("../../views/backend/listOfEPay_v.php", $varsCriteria);

?>