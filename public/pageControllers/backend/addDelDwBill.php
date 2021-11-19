<?php
	$pageTitle = "BillPay - Manage Drinking Water Bills";

	if(isset($_POST['save_btn'])){
		$dwBillValues = [
			'dconsumer_id'=> $_POST['dconsumer_id'],
	      	'reading_date'=> $_POST['reading_date'],
	      	'due_date' => $_POST['due_date'],
	      	'consumed_unit'=> $_POST['consumed_unit'],
	      	'bill_amt'=> $_POST['bill_amt']
	    ];
		
		$dwBillTbl->funcSave($dwBillValues); 
		echo '<script>
				alert("New Drinking Water Bill Added!");
				document.location = "listOfDwBill";
			  </script>';
	}

	if(isset($_GET['removeId'])){
		$removeDwBillStmt = $dwBillTbl->funcDelete('dwBill_id', $_GET['removeId']); 
		echo "<script>alert('Drinking Water Bill Deleted!');
			window.location.href='listOfDwBill';</script>";
	}

	$varsCriteria = [
        'dwConsumerTbl'=>$dwConsumerTbl,
        'dwBillTbl'=> $dwBillTbl   
    ];

    $pageContents = loadsTemplate('../../views/backend/addingDwBill_v.php',$varsCriteria);
?>