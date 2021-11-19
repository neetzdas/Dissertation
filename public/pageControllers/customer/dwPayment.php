<?php
$pageTitle = "BillPay - Pay Drinking water Bill";

	$varsCriteria = [
		'dwBillTbl'=>$dwBillTbl,
		'dwConsumerTbl' => $dwConsumerTbl
    ];

$pageContents = loadsTemplate("../../views/customer/dwPayment_v.php", $varsCriteria);

?>