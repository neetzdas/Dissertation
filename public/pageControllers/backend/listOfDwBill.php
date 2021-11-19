<?php

	$pageTitle = "BillPay - List of Drinking Water Bills";

	$dwBillRecords = $pdo->prepare("SELECT * FROM tb_dwbills db
									JOIN tb_dwconsumers dc
									ON db.dConsumer_id= dc.dConsumer_id
									ORDER BY db.dwBill_id DESC");
	$dwBillRecords->execute();


	$varsCriteria = [
		'dwBillRecords' => $dwBillRecords	
    ];

	$pageContents = loadsTemplate("../../views/backend/listOfDwBill_v.php", $varsCriteria);
?>