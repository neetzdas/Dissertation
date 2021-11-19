<?php
	$pageTitle = "BillPay - Pay Electricity Bill";

	$varsCriteria = [
		'eBillTbl'=>$eBillTbl,
		'eConsumerTbl' => $eConsumerTbl
	];

	$pageContents = loadsTemplate("../../views/customer/ePayment_v.php", $varsCriteria);
?>