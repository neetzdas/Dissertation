<?php
	
$pageTitle = "BillPay - Your Unpaid Electricity Bills";		

$varsCriteria = [
                'counterTbl'=> $counterTbl
       
    ];
$pageContents = loadsTemplate("../../views/customer/eSearch_v.php", $varsCriteria);

?>

