<?php 
	$pageTitle = "BillPay - Update Drinking Water Bill";

	if(isset($_POST['save_btn'])){ 
		$dwBillValues = [
			'dwBill_id' => $_POST['dwBill_id'],
			'dconsumer_id'=> $_POST['dconsumer_id'],
	      	'reading_date'=> $_POST['reading_date'],
	      	'due_date' => $_POST['due_date'],
	      	'consumed_unit'=> $_POST['consumed_unit'],
	      	'bill_amt'=> $_POST['bill_amt']
		];
		          
		$dwBillTbl->funcSave($dwBillValues, 'dwBill_id'); 
		echo '<script>
				alert("Drinking Water Bill Updated!");
				document.location = "listOfDwBill";
			  </script>';
	}

	$varsCriteria = [
        'dwBillTbl'=>$dwBillTbl,
        'dwConsumerTbl'=>$dwConsumerTbl
    ];

	$pageContents = loadsTemplate("../../views/backend/updatingDwBill_v.php", $varsCriteria);
?>