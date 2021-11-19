<?php
	
	$pageTitle = "BillPay - List of Electricity Bills";

	$eBillRecords = $pdo->prepare("SELECT * FROM tb_ebills eb
									JOIN tb_econsumers ec
									ON eb.econsumer_id= ec.econsumer_id
									ORDER BY eb.eBill_id DESC");
	$eBillRecords->execute();


	$varsCriteria = [
		'eBillRecords' => $eBillRecords	
    ];

	$pageContents = loadsTemplate("../../views/backend/listOfEBill_v.php", $varsCriteria);
?>