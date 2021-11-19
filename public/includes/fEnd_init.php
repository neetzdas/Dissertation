<?php 
	require '../diss_db/connectsDb.php'; 
	require '../classes/DatabaseTbl.php';
	require '../functions/loadsTemplate.php';

	$customerTbl = new DatabaseTbl('tb_customers');
	$adminTbl = new DatabaseTbl('tb_admin');
	$counterTbl = new DatabaseTbl('tb_counters'); 
	$merchantTbl = new DatabaseTbl('tb_merchants');
	$eBillTbl = new DatabaseTbl('tb_ebills');
	$dwBillTbl = new DatabaseTbl('tb_dwbills');
	$ePayTbl = new DatabaseTbl('tb_epayments');
	$dwPayTbl = new DatabaseTbl('tb_dwpayments');
	$enquiryTbl = new DatabaseTbl('tb_enquiry');
	$eConsumerTbl = new DatabaseTbl('tb_econsumers');
	$dwConsumerTbl = new DatabaseTbl('tb_dwconsumers');

?>