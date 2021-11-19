<?php
	
$pageTitle = "BillPay - Customer Dashboard";

$varsCriteria = [
        'customerTbl'=>$customerTbl
    ];

$pageContents = loadsTemplate("../../views/customer/cusDashboard.php", $varsCriteria);

?>

