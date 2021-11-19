<?php
	$pageTitle = "BillPay - Manage Electricity Bills";

	if(isset($_POST['save_btn'])){ 
		$eBillValues = [
			  	'econsumer_id'=> $_POST['econsumer_id'],
	      			'reading_date'=> $_POST['reading_date'],
	      			'due_date' => $_POST['due_date'],
	      			'consumed_unit'=> $_POST['consumed_unit'],
	      			'per_unit_price'=> $_POST['per_unit_price'],
	      			'bill_amt'=> $_POST['bill_amt']
		       		 ];
		          
		$eBillTbl->funcSave($eBillValues); 
		echo '<script>
			alert("New Electricity Bill Added!");
			document.location = "listOfEBill";
		      </script>';
			
	}

	if(isset($_GET['removeId'])){
		$removeEBillStmt = $eBillTbl->funcDelete('eBill_id', $_GET['removeId']); 
			echo "<script>alert('Electricity Bill Deleted!');
				window.location.href='listOfEBill';</script>";
	}

	$varsCriteria = [
        'eConsumerTbl'=>$eConsumerTbl,
        'eBillTbl'=> $eBillTbl
	];

	$pageContents = loadsTemplate('../../views/backend/addingEBill_v.php',$varsCriteria);
?>