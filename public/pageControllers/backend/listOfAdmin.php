<?php
	
	$pageTitle = "BillPay - List of Admin";

	$admin_records=$adminTbl->funcAllSelect();
	$recordsOfAdmin=$admin_records->fetchAll();


	$varsCriteria = [
        'recordsOfAdmin'=>$recordsOfAdmin
    ];

	$pageContents = loadsTemplate("../../views/backend/listOfAdmin_v.php", $varsCriteria);
?>