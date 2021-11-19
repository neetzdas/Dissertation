<?php
	
$pageTitle = "BillPay - Your Unpaid Drinking Water Bills";		

$varsCriteria = [
                'merchantTbl'=> $merchantTbl
       
    ];
$pageContents = loadsTemplate("../../views/customer/dwSearch_v.php", $varsCriteria);

?>

