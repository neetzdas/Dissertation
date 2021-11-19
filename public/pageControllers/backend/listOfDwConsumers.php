<?php
	
$pageTitle = "BillPay - Drinking Water Consumers";

$dwConsumersList=$dwConsumerTbl->funcAllSelect();
$recordsOfdwConsumers=$dwConsumersList->fetchAll();

$listDwCustomers=$merchantTbl->funcAllSelect();
	$merchants=$listDwCustomers->fetchAll();



$varsCriteria = [
        'recordsOfdwConsumers'=>$recordsOfdwConsumers,
        'dwConsumerTbl'=>$dwConsumerTbl,
        'merchants' => $merchants
    ];

$pageContents = loadsTemplate("../../views/backend/dwConsumersList_v.php", $varsCriteria);

?>