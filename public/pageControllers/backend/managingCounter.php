<?php
	
	$pageTitle = "BillPay - Manage Counters";

	if(isset($_GET['updateId'])){ 
		$currentCounter = $counterTbl->funcSelect('c_id' , $_GET['updateId']); 
		$dataOfCounter=$currentCounter->fetch();
	}
	else{
		$dataOfCounter =[];
	}

	if(isset($_POST['save_btn'])){
		$counterData=[
			'c_id'=>$_POST['c_id'],
			'name'=>$_POST['name']
		];

		$givenCri = $counterTbl->funcSave($counterData,'c_id');
		
		if($givenCri == true){
			echo '
				<script>
				alert("Counter Successfuly Saved!");
				document.location = "managingCounter";
				</script>';
		}
		else{
			echo '
				<script>
				alert("Counter Not Saved!");
				</script>';
		}
	}

	if(isset($_GET['removeId'])) {
		$removeCounterStmt = $counterTbl->funcDelete('c_id', $_GET['removeId']); 
			echo "<script>alert('Counter Successfuly Deleted!');
			window.location.href='managingCounter';</script>";
	}
	
	$counter_records=$counterTbl->funcAllSelect();
	$recordsOfCounter=$counter_records->fetchAll();

	$varsCriteria = [
        'recordsOfCounter'=>$recordsOfCounter,
        'dataOfCounter'=>$dataOfCounter
    ];

	$pageContents = loadsTemplate("../../views/backend/counter_v.php", $varsCriteria);
?>