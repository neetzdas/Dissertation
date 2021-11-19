<?php 
	
	$pageTitle = "BillPay - Update Electricity Bill";

	if(isset($_POST['save_btn'])){ 
		$eBillValues = [
			'eBill_id' => $_POST['eBill_id'],
			'econsumer_id'=> $_POST['econsumer_id'],
	      	'reading_date'=> $_POST['reading_date'],
	      	'due_date' => $_POST['due_date'],
	      	'consumed_unit'=> $_POST['consumed_unit'],
	      	'per_unit_price'=> $_POST['per_unit_price'],
	      	'bill_amt'=> $_POST['bill_amt']
		];
		          
		$eBillTbl->funcSave($eBillValues, 'eBill_id'); 
		echo '<script>
				alert("Electricity Bill Updated!");
				document.location = "listOfEBill";
			  </script>';
	}

	$varsCriteria = [
        'eBillTbl'=>$eBillTbl,
        'eConsumerTbl'=>$eConsumerTbl
    ];

	$pageContents = loadsTemplate("../../views/backend/updatingEBill_v.php", $varsCriteria);
?>