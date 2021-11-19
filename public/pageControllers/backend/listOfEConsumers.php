<?php
	
$pageTitle = "BillPay - Electricity Consumers";

$eConsumersList=$eConsumerTbl->funcAllSelect();
$recordsOfEConsumers=$eConsumersList->fetchAll();

$listECustomers=$counterTbl->funcAllSelect();
	$counters=$listECustomers->fetchAll();



$varsCriteria = [
        'recordsOfEConsumers'=>$recordsOfEConsumers,
        'counters' => $counters
    ];

$pageContents = loadsTemplate("../../views/backend/eConsumersList_v.php", $varsCriteria);

?>